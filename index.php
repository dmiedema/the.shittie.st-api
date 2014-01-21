<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();


$app->get('/', function() use ($app) {
    $message = "The boats are nervous. The wind comes so they hide.";
    processMessage($message, $app);
});

$app->get('/api(/)', function() use ($app) {
    $message = "shit";
    processMessage($message, $app);
});

$app->get('/api/shit(/:count)', function($count = 1) use ($app) {
  $message = "";
  for ($i = 0; $i < $count; $i++)
    $message .= "shit ";
  processMessage($message, $app);
})->conditions(array('count' => '\d+'));

$app->get('/api/shit/:name', function($name) use ($app) {
    $message = "$name is shit";
    processMessage($message, $app);
});

$app->get('/api/shit/:name/fuck', function($name) use ($app) {
    $message = "$name is fucking shit";
    processMessage($message, $app);
});

$app->get('/api/shittiest/:name', function($name) use ($app) {
    $message = "$name is the shittiest person";
    processMessage($message, $app);
});

$app->get('/api/fuck', function() use ($app) {
    $message = "fucking shit";
    processMessage($message, $app);
});

$app->get('/api/you', function() use ($app) {
    $message = "you are shit";
    processMessage($message, $app);
});

$app->get('/api/this', function() use ($app) {
    $message = "this is shit";
    processMessage($message, $app);
});

$app->get('/api/everything', function() use ($app) {
    $message = "everything is shit";
    processMessage($message, $app);
});

$app->get('/api/goddamn', function() use ($app) {
    $message = "god damn piece of shit";
    processMessage($message, $app);
});

$app->get('/api/goddamn/:expletive', function($expletive) use ($app) {
    $message = "god damn piece of $expletive shit";
    processMessage($message, $app);
});

$app->run();


function processMessage($message, &$slimApp) {
  $accept = strtolower($slimApp->request->headers->Accept);
  if (strpos($accept, 'json') !== FALSE) {
    $slimApp->contentType('application/json');
    echo jsonEncodeMessage($message);
  } else {
    $slimApp->contentType('text/plain');
    echo $message;
  }
}

function jsonEncodeMessage($message) {
   return json_encode(array('message' => $message));
}
