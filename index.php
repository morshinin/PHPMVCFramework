<?php
/**
 * User: Morshinin
 * Date: 17/01/2021
 */

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';

$app = new Application();

$app->router->get('/', function() {
    return 'Hello world';
});

$app->run();