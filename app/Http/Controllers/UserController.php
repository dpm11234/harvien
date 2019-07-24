<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use \Illuminate\Http\Response as Res;
use Validator;

class UserController extends ApiController
{
    /**
     * @var \App\Repository\Transformers\UserTransformer
     * */
    protected $userTransformer;
    public function __construct()
    { }
    /**
     * @description: Api user authenticate method
     * @author: Adelekan David Aderemi
     * @param: email, password
     * @return: Json String response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = request(['email', 'password']);

        if (!auth()->attempt($credentials)) {
            return $this->respond([
                'message'       => 'Unauthorized'
            ], Res::HTTP_UNAUTHORIZED);
        }
        $user = auth()->user();
        $tokenResult = $user->createToken('authToken');

        return $this->respond([
            'message'       => 'Login successful!',
            'user'      => $user,
            'token' =>  $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
        ]);
    }

    /**
     * @description: Api user register method
     * @author: Adelekan David Aderemi
     * @param: lastname, firstname, username, email, password
     * @return: Json String response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:password',
        ]);



        if ($validator->fails()) {
            return $this->respondValidationError(
                'Values are not valid',
                $validator->errors()
            );
        }

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => \Hash::make($request->get('password')),
        ]);

        return $this->respond([
            'message' => 'Successfully created user!',
        ], Res::HTTP_CREATED);
    }
    /**
     * @description: Api user logout method
     * @author: Adelekan David Aderemi
     * @param: null
     * @return: Json String response
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->respond(['message' => 'Logout successfully']);
    }
}
