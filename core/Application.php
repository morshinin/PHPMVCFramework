<?php
/**
 * User: Morshinin
 */

namespace app\core;

/**
 * Class Application
 *
 * @author Mikhail Morshinin <inbox@morshinin.ru>
 * @package app\core
 */

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}