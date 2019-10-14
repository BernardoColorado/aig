<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class AigController extends Controller{
    
    //mandamos llamar dependencias del container
    public function __construct(Container $container){

        //container yn sus dependencias
        $this->container=$container;
        $this->config=$this->container['config'];
        $this->views=$this->container['views'];
        $this->mongo=$this->container['mongo-db']('mongodb://localhost:27017');
        $this->modules['usuario']=$this->container['usuario']($this->mongo);

    }

    public function index($request,$response,$args){

        return $this->views->render($response, 'index.html',['url'=>'http://localhost/aig/public']);
        
    }

    public function catalogo($request,$response,$args){

        return $this->views->render($response,'catalogo.html',[]);
        
    }

    public function login($request,$response,$args){

        return $this->views->render($response,'login.html',[]);
        
    }

    public function loginCatch($request,$response,$args){

        if(isset($_POST['user'])&&isset($_POST['password'])){

            $user=$_POST['user'];
            //
            $password=$_POST['password'];

            $this->modules['usuario']->validatePassword($user,$password);

        }
        else{
            echo('bad');
        }
        
    }

}

?>