<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(['settings' => [
    'displayErrorDetails' => true,
    'responseChunkSize' => 8096]
    ]
);
//
$container=$app->getContainer();
//
$container['config']=function($container){

    return new App\Config\Config('../app/src/Config/Config.json');

};

//
$container['views']=function($container){

    return new Slim\Views\PhpRenderer('../app/src/Views');

};
//
$container['mongo-db']=function($container){

    return function($config){

        return App\Tools\Mongo::instanciate($config);

    };

};
//
$container['marca']=function($container){

    return function($database){

        return new App\Modules\Marca($database);

    };

};
//
$container['sector']=function($container){

    return function($database){

        return new App\Modules\Sector($database);

    };

};
//
$container['medida']=function($container){

    return function($database){

        return new App\Modules\Medida($database);

    };

};
//
$container['producto']=function($container){

    return function($database){

        return new App\Modules\Producto($database);

    };

};
//
$container['usuario']=function($container){

    return function($database){

        return new App\Modules\Usuario($database);

    };

};

?>