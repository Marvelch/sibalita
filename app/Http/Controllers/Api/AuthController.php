<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\login;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\loginValidationRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;

class AuthController extends Controller
{

    /**
     * Security management for data access
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);

        if (!$token) {
            return response()->json([
                'statusCode'=> 404,
                'status'    => 'error',
                'message'   => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
                'statusCode'    => 200,
                'status'        => 'success',
                'user'          => $user,
                'authorisation' => [
                    'token' => $token,
                    'type'  => 'bearer',
                ]
            ]);

    }

    /**
     * Create a new account for the user
     */
    public function register(RegisterRequest $request,){

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'statusCode' => 200,
                'status' => 'success',
                'message' => 'User created successfully',
            ])->setStatusCode(200);
        } catch (\Throwable $th) {
            //throw $th;

            return response()->json([
                'statusCode' => 404,
                'status' => 'failed',
                'message' => $th->getMessage(),
            ])->setStatusCode(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
                'statusCode' => 200,
                'status' => 'success',
                'message' => 'Successfully logged out',
            ])->setStatusCode(200);
    }

    public function refreshToken()
    {
        $user = Auth::user();

        if($user) {
            return response()->json([
                'user' => Auth::user(),
                'authorisation' => [
                    'token' => Auth::refresh(),
                    'type' => 'bearer',
                ]
            ]);
        }else{
            return response()->json([
            ])->setStatusCode(204);
        }
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
