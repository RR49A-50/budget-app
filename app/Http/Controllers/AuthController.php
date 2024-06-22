<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected UserService $service)
    {
        
    }

    public function login (AuthRequest $request)
    {
        $payload = $request -> validated();
        $username = $payload["username"];
        $password = $payload["password"];
        $user = $this->service->getByUsername($username);
        
        // dd($payload);
        // dd(auth()->attempt($payload));
        // if (! $token = auth()->attempt($payload))
        // {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        if(! $token = auth()->attempt($payload))
        {
            // dd($token);
            return $this->response(null,'gagal login','error',400);
        }
        return $this->response($token);
        
    }
}
