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

    public Request $request;
    protected array $routes = [];

    /**
     * Router constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "Not found";
            exit;
        }
        echo call_user_func($callback);
    }
}