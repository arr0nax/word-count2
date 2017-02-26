<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Count.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);
    $app['debug'] = true;

    $app->get('/', function() use($app) {
        return $app["twig"]->render("root.html.twig");
    });

    return $app;
?>
