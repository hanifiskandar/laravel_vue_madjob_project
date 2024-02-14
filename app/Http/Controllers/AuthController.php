<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        \Log::debug($request->all());
        // dd();
        // Validation
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'type' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => __('Error saving record.'),
                'errors' => $validator->errors()
            ], 422);
        }

        // Create user
        $user = User::create([
            'username' => $request->username,
            'type' => $request->type,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Generate token
        $token = $user->createToken('authToken')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /**
     * Authenticate a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validation

        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Attempt to log the user in
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed...
            $token = auth()->user()->createToken('authToken')->accessToken;
            \Log::debug("berjaya ke");
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    }

    /**
     * Logout a user (revoke the token).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function validateToken(Request $request)
    {
        \Log::debug("validateToken ke");
        try {
            $user = $request->user(); // Retrieve the authenticated user based on the token
            // Token is valid, return a success response
            return response()->json(['message' => 'Token is valid'], 200);
        } catch (\Exception $e) {
            // Token is invalid or expired, return an error response
            return response()->json(['error' => 'Invalid token'], 401);
        }
    }
}