<?php

namespace App\GraphQL\Mutations;

class Token
{
    public function __invoke(): string
    {
        return 'funciona';
    }
}
