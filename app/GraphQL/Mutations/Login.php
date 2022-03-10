<?php

namespace App\GraphQL\Mutations;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {   
        $token = null;
       
       if (Auth::guard('web')->attempt(['email' => $args['email'],'password' => $args['password']])) {
            $token = User::where('email',$args['email'])->first()->createToken('token')->plainTextToken;
        }
        
        return  $token;  
    }
}
