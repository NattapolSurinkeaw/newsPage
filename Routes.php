<?php


return [
    // Route Web
    [ "url" => "/", 'controller' => \Controllers\IndexController::class, 'method' => 'index'], // "name" => "index11",
    [ "url" => "/category/{slug}", 'controller' => \Controllers\IndexController::class, 'method' => 'catePage'],
    [ "url" => "/article/{slug}", 'controller' => \Controllers\IndexController::class, 'method' => 'articlePage'],
    
    // Route API
    [ "url" => "/api/users",       'controller' => \Controllers\Api\UsersApiController::class, 'method' => 'index',  'name' => 'api.users.index'],
    [ "url" => "/api/users/{id}",  'controller' => \Controllers\Api\UsersApiController::class, 'method' => 'show',   'name' => 'api.users.show'],
];