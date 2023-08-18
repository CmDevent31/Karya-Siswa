<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class AdminController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]); // Menambahkan middleware auth
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

        $admins = Auth::admin();
        return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Login!',
                'data' => $admins,
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
                'bagian' => 'required|string|max:50',
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
    
            $admins = Admin::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'username' => $request->username,
                'bagian' => $request->bagian,
                'dob' => $request->dob,
                'bio' => $request->bio,
                'phone_number' => $request->phone_number,
                'role' => $request->role, // Assign peran yang dipilih dari permintaan
            ]);
    
            $token = Auth::login($admins);
            return response()->json([
                'status' => 'success',
                'message' => 'Pengguna Admin berhasil dibuat',
                'data' => $admins,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan selama registrasi',
                'data' => (object) [],
            ], 500);
        }
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
            'data' => Auth::admin(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
