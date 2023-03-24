<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{


    /**
     * @OA\Post(
     * path="/api/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authLogin",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="default.user@gmail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="default123"),
     *    ),
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="boolean"),
     *     @OA\Property(property="user", type="object"),
     *     @OA\Property(property="authorization", type="object"),
     *     )
     *  ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * ),
     */

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

    }


    /**
     * @OA\Post(
     * path="/api/register",
     * summary="Registration",
     * description="Register by name, email, password",
     * operationId="authRegister",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user register data",
     *    @OA\JsonContent(
     *       required={"name","email","password"},
     *     @OA\Property(property="name", type="string", example="Test Test"),
     *       @OA\Property(property="email", type="string", format="email", example="test.test@gmail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="test1234"),
     *    ),
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="boolean"),
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="user", type="object"),
     *     @OA\Property(property="authorization", type="object"),
     *     )
     *  ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="The name field is required.")
     *        )
     *     )
     * ),
     */

    public function register(RegisterRequest $request): JsonResponse
    {
        $inputs = $request->only('name','email', 'password');
        $user = User::create([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }


    /**
     * @OA\Post(
     * path="/api/logout",
     * summary="Logout",
     * description="Logout user and invalidate token",
     * operationId="authLogout",
     * tags={"auth"},
     * security={ {"bearerAuth": {} }},
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="string", example="success"),
     *     @OA\Property(property="message", type="string", example="Successfully logged out"),
     *     )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * )
     */

    public function logout(): JsonResponse
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }


    /**
     * @OA\Get(
     *  path="/api/me",
     *  summary="signed in user",
     *  description="Get signed user Detail",
     * operationId="authGetMe",
     * tags={"auth"},
     * security={ {"bearerAuth": {} }},
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="string", example="success"),
     *     @OA\Property(property="user", type="object"),
     *     )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * )
     */
    public function me(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
        ]);
    }

    /**
     * @OA\Post(
     * path="/api/refresh",
     * summary="Refresh",
     * description="Refresh token",
     * operationId="authRefreshToken",
     * tags={"auth"},
     * security={ {"bearerAuth": {} }},
     * @OA\RequestBody(
     *
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="status", type="string", example="success"),
     *     @OA\Property(property="user", type="object"),
     *     @OA\Property(property="authorization", type="object"),
     *     )
     *  ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * ),
     */

    public function refresh(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorization' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }


}
