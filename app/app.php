<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/String.php";

      session_start();
      if(empty($_SESSION['input'])) {
        $_SESSION['input'] = array();
      }

    $app = new Silex\Application();
    $app-> register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' =>__DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('stringHome.html.twig');
    });

    $app->post("/stringMade", function() use ($app) {
      $counts = new String;
      $results = $counts->string_count($_POST['string'], $_POST['count']);

      return $app['twig']->render('stringMade.html.twig', array('results' => $results));
    });

      return $app;
 ?> 