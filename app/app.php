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

    $app->post('/count', function() use($app) {
        $word = $_POST['word'];
        $sentence = $_POST['sentence'];
        $new_count = new Count($sentence, $word);
        $result = $new_count->count();
        return $app["twig"]->render("count.html.twig", ['result'=>$result]);

    });

    return $app;
?>
