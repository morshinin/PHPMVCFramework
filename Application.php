<?php
/**
 * User: Morshinin
 */

/**
 * Class Application
 *
 * @author Mikhail Morshinin <inbox@morshinin.ru>
 * @package ${NAMESPACE}
 */

class Application
{
    public Router $router;
    public function __construct()
    {
        $this->router = new Router();
    }
}