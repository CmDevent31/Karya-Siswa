<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        // try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|unique:admins',
                'password' => 'required|string|min:6',
                'username' => 'required|string|min:7',
                'bagian' => 'required|string|max:45',
                'dob'   => 'required|date',
                'bio'  => 'required|string|max:255',
                'phone_number' => 'required|string|max:24',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'data'   => (object) [],
                    'errors' => $validator->errors(),
                ], 422);
            }

            $admin = Admin::create([
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'username' => $request->username,
                'bagian' => $request->bagian,
                'dob'   => $request->dob,
                'bio'  => $request->bio,
                'phone_number' => $request->phone_number,
            ]);

            $token = JWTAuth::fromUser($admin);

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil daftar!',
                'data' => $admin,
                'authorization' => [ // Perbaikan nama key menjadi 'authorization'
                    'token' => $token,
                    'type' => 'bearer',
                ],
            ]);

        // } catch (\Exception $e) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'An error occurred',
        //         'data' => (object) [], // Empty object
        //     ], 500);
        // }
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'errors' => $validator->errors(),
                ], 422);
            }

            $credentials = $request->only('email', 'password');
            if (!$token = JWTAuth::attempt($credentials)) {
                // dd($token);
                return response()->json([
                    'status' => 'success',
                'message' => 'Berhasil Login!',
                // 'data' => $admin,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ],
                ], 200);
            }

            $admin = JWTAuth::user();
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil Login!',
                'data' => $admin,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ],
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred',
                'data' => (object) [], // Empty object
            ], 500);
        }
    }
}