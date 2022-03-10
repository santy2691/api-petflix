<?php

namespace App\GraphQL\Mutations;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MovieMutation
{
  

    public function setMovie($_, array $args): Movie 
    {   
        $datos = Arr::only($args,[
                'title',
                'data_premiere',
                'sinopsis',
                'duration',
                'type',
                'urlFile',
                'imagen']);
        
        $movie = Movie::where("id",$args['id']);
        $movie->update($datos);
        return $movie->first();
    }
}