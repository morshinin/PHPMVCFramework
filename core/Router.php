<?php
/**
 * User: Morshinin
 */

namespace app\core;

/**
 * Class Router
 *
 * @author Mikhail Morshinin <inbox@morshinin.ru>
 * @package app\core
 */
class Router
{
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
}