<?php
function rest_route($route, $methods, $callback)
{
    register_rest_route('w1/v1', $route, [
        'methods' => $methods,
        'callback' => $callback,
    ]);
}