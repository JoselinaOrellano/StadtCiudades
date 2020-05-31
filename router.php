?php
<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once 'controllers/ciudades.controller.php';
    
    $action= $_REQUEST['action'];
    $urlAction= explode('/',$action);

 
    switch ($urlAction[0]){
        ccacase'inicio': {
            $ctrl= new ciudadesControlador();
           $ctrl ->imprimirInicio();
        } break;
    }