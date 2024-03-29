<?php
require "vendor/autoload.php";

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
));

$app->get('/', function() use($app) {
    return $app['twig']->render('index.twig');
});
