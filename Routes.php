<?php


return [

    [ "url" => "/", 'controller' => \Controllers\IndexController::class, 'method' => 'index'], // "name" => "index11",
    [ "url" => "/category/{slug}", 'controller' => \Controllers\IndexController::class, 'method' => 'catePage'],
];