<?php
if( !session_id() ) @session_start();

require '../vendor/autoload.php';
use DI\ContainerBuilder;
use Delight\Auth\Auth;
use App\QueryBuilder;


$containerBuilder = new ContainerBuilder;

$containerBuilder->addDefinitions([

        Engine::class => function() {
            return new Engine('../app/views');
        },
    
        PDO::class => function ( ) {
            return new PDO( 'mysql:host=localhost;dbname=project3', "root", "root" );
            },

        QueryBuilder::class => function ( $container ) {
            return new QueryBuilder($container->get( 'PDO' ) );
            },
    
        Auth::class => function($container) {
            return new Auth($container->get('PDO'));
        },
    ]);
    
    $container = $containerBuilder->build();

// $containerBuilder->addDefinitions([

// QueryBuilder::class => function ( $container ) {
//     return new QueryBuilder($container->get( 'PDO' ) );
//     },

//  ]);

$container = $containerBuilder->build();
// ORM::configure('mysql');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

    $r->addRoute('GET', '/', ['\App\controllers\OneController','home']);

    $r->addRoute('GET', '/one_product', ['\App\controllers\OneController','one_product']);

    $r->addRoute('GET', '/category', ['\App\controllers\OneController', 'category']);

    $r->addRoute('GET', '/main_admin', ['\App\controllers\OneController', 
    'mainAdmin']);
    $r->addRoute('GET', '/product_insert', ['\App\controllers\OneController', 
    'insert']);

    $r->addRoute('GET', '/product_update', ['\App\controllers\OneController', 
    'update']);

    $r->addRoute('GET', '/product_delete', ['\App\controllers\OneController', 
    'delete']);

    $r->addRoute('POST', '/controllers/insert', ['\App\controllers\OneController', 
    'insert']); 

    $r->addRoute('POST', '/controllers/update', ['\App\controllers\OneController', 
    'update']);

    $r->addRoute('GET', '/insert_all', ['\App\controllers\OneController', 
    'insertAll']);




    $r->addRoute('GET', '/register_form', ['\App\controllers\OneController', 
    'register_form']);

    $r->addRoute('POST', '/controllers/register', ['\App\controllers\OneController', 
    'register']);

    $r->addRoute('GET', '/verification', ['\App\controllers\OneController', 
    'email_verification']); 

    $r->addRoute('POST', '/verification', ['\App\controllers\OneController', 
    'email_verification']); 

    $r->addRoute('GET', '/login_form', ['\App\controllers\OneController', 
    'login_form']); 

    $r->addRoute('POST', '/controllers/login', ['\App\controllers\OneController', 
    'login']); 

    $r->addRoute('GET', '/controllers/logout', ['\App\controllers\OneController', 
    'logout']); 

});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo 'Page 404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $container->call($routeInfo[1], $routeInfo[2]);

        break;
} 
?>
<link a href="style.css" rel="stylesheet">