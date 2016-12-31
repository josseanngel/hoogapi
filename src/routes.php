<?php

use Hoog\API\Controller\UserController;

$users = new UserController();
// Routes

$app->get('/', function ($request, $response, $args) {
   
});

$app->get('/users', function ($request, $response, $args) use ($users) {
	return $users->getUsers($request, $response);
});

