<?php
require '../vendor/autoload.php';


// Create container
$container = new \Slim\Container;

// Register component on container
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('../views', [
        'cache' => false,
        'debug' => true
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

// Register 404 error handler
$container['notFoundHandler'] = function ($container) {
    return function ($request, $response) use ($container) {
        return $container['view']->render($response, 'error.html', ['number' => 404]);
    };
};

// Register 405 error handler
$c['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $methods) use ($c) {
        return $container['view']->render($response, 'error.html', ['number' => 405]);
    };
};

/**
 * Init app
 */
$app = new Slim\App($container);

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html', []);
});

$app->get('/about', function ($request, $response, $args) {
    return $this->view->render($response, 'about.html', []);
});

$app->post('/', function ($request, $response, $args) {

    $row_input = explode('=', $request->getBody());

    $validate = function ($row) {
        if (!empty($row) && count($row) == 2) {
            if ($row[0] == 'vector' && preg_match("/^[01]{2,64}$/", $row[1]) === 1) {
                if (pow(2, (int)log(strlen($row[1]), 2)) === strlen($row[1])) return true;
            }
        }
        return false;
    };

    $error = false;
    $table = null;
    if ($validate($row_input)) {
        $str_vector = $row_input[1];
        $table = new app\Table(str_split($str_vector));
    } else {
        $error = true;
    }

    return $this->view->render($response, 'index.html', [
        'error' => $error,
        'table' => $table
    ]);
});

/**
 * Run app
 */
$app->run();
