<?php
namespace Hoog\API\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class UserController 
{
    public function getUsers(Request $request, Response $response)
    {
        $users = [
            'Ade',
            'Joke',
            'Gbenga',
            'Timi',
            'Ajayi',
        ];

        return $response->withJson($users, 200);
    }
}