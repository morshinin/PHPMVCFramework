<?php
/**
 * User: Morshinin
 */

namespace app\controllers;

use app\core\Application;

/**
 * Class SiteController
 *
 * @author Mikhail Morshinin <inbox@morshinin.ru>
 * @package app\controllers
 */
class SiteController
{
    public static function home()
    {
        $params = [
            'name'  =>  'Morshinin'
        ];
        return Application::$app->router
            ->renderView('home', $params);
    }

    public static function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public static function handleContact()
    {
        return 'Handling submitted data';
    }
}