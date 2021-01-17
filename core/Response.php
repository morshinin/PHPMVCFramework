<?php
/**
 * User: Morshinin
 */

namespace app\core;

/**
 * Class Response
 *
 * @author Mikhail Morshinin <inbox@morshinin.ru>
 * @package app\core
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}