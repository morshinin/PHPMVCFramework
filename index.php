<?php
/**
 * User: Morshinin
 * Date: 17/01/2021
 */


$app = new Application();

$app->router->get('/', function() {
    return 'Hello world';
});

$app->run();