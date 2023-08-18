<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }


    public function login(Request $request)
    {
        try{
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
                'data'    => (Object)[],
            ], 401);
        }
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = Auth::user();
        return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Login!',
                'data' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'data' => (object) [], // Empty object
            ], 500);
        }
    }


    
    public function register(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'username' => 'required|string|max:255|unique:users',
                'kelas' => 'required|string|max:11',
                'dob' => 'required|date|max:255',
                'bio' => 'required|string|max:255',
                'phone_number' => 'required|string|max:14',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }
    
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'username' => $request->username,
                'kelas' => $request->kelas,
                'dob' => $request->dob,
                'bio' => $request->bio,
                'phone_number' => $request->phone_number,
                'role' => $request->role, // Assign peran yang dipilih dari permintaan
            ]);
    
            $token = Auth::login($user);
            return response()->json([
                'status' => 'success',
                'message' => 'Pengguna berhasil dibuat',
                'data' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan selama registrasi',
                'data' => (object) [],
            ], 500);
        }
    }
    
    

    
    

    public function update(Request $request)
{
    $user = Auth::user(); // Mendapatkan informasi user yang sedang terautentikasi
    
        $validator = Validator::make($request->all(), [
        'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'sometimes|required|string|min:6',
        'username' => 'sometimes|required|string|max:255',
        'kelas' => 'sometimes|required|string|max:11',
        'dob' => 'sometimes|required|date|max:255',
        'bio' => 'sometimes|required|string|max:255',
        'phone_number' => 'sometimes|required|string|max:14',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors(),
            'data' => (object) [], // Empty object
        ], 422);
    }


    // Mengambil data dari request
    $userData = $request->only(['email', 'password', 'username', 'kelas', 'dob', 'bio', 'phone_number']);

    if (isset($userData['password'])) {
        // Jika password ada dalam data yang diperbarui, maka kita hash password baru
        $userData['password'] = Hash::make($userData['password']);
    }

    // Memperbarui informasi user
    $user->update($userData);

    return response()->json([
        'status' => 'success',
        'message' => 'User information updated successfully',
        'data' => $user,
    ]);
    
}


    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
            'data'    => (Object)[],
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'data' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

}
