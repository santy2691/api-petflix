<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class UserGraph
{
    

    public function updateMyUser($_, array $args): User 
    {   
        $datos = Arr::only($args,[
            'name',
            'password',
            'lastName'
        ]);
        $id = Auth::id();
        $user = User::where("id",$id);
        $user->update($datos);
        return $user->first();
    }


    public function updateUser($_, array $args): User  {
        $datos = Arr::only($args,[
            'name',
            'password',
            'lastName',
            'admin'
        ]);
        $user = User::where("id",$args['id']);
        $user->update($datos);
        return $user->first();
    }
}
