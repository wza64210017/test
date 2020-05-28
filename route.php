<?php

$router->get('/test1', function () use ($router) {
    return $router->app->version();
});
