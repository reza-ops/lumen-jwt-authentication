<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    public function login (Request $request)
    {
        $post = $request->all();
        $rules = [
            'email'    => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($post, $rules);
        if (!$validator->passes())
        {
            return response()->json([
                'message' => $validator->errors()->all(),
            ]);
        }
        $credentials = $request->only(['email', 'password']);
        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => Auth::factory()->getTTL() * 60
        ]);
    }

    public function UserProfile()
    {
        return response()->json(Auth::user());
    }

    public function register(Request $request)
    {
        $post = $request->all();
        $rules = [
            'name'     => 'required',
            'email'    => 'required|unique:users,email',
            'password' => 'required',
        ];
        $validator = Validator::make($post, $rules);
        if (!$validator->passes())
        {
            return response()->json([
                'message' => $validator->errors()->all(),
            ]);
        }
        try{
            $post['password'] = Hash::make($post['password']);
            $query = User::create($post);
            $token = Auth::login($query);
            return response()->json([
                'access_token' => $token,
                'token_type'   => 'bearer',
                'expires_in'   => Auth::factory()->getTTL() * 60
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
