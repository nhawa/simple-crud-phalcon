<?php

$router = $di->getRouter();

// Define your routes here

$router->add(
    "/create",
    [
        "controller" => "index",
        "action"     => "create",
    ]
);
$router->add(
    "/post",
    [
        "controller" => "index",
        "action"     => "post",
    ]
);
$router->add(
    "/delete/:params",
    [
        "controller" => "index",
        "action"     => "delete",
        "params"     => 1
    ]
);
$router->add(
    "/edit/:params",
    [
        "controller" => "index",
        "action"     => "edit",
        "params"     => 1
    ]
);
$router->add(
    "/update/:params",
    [
        "controller" => "index",
        "action"     => "update",
        "params"         => 1
    ]
);

$router->handle();
