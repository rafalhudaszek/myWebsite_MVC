<?php
class Navigate
{
    function __construct()
    {
        session_start();
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if(empty($url[0]))
        {
            require_once 'controllers/index.php';
            $controller = new Index();
            $_SESSION['url'] = 'index';
            //$controller->loadModel($url[0]);
        }

        if(file_exists('controllers/' . $url[0] . '.php'))
        {
            require_once 'controllers/' . $url[0] . '.php';
            $controller = new $url[0]; 
            $controller->loadModel($url[0]);
            
        }
        
        
        if(isset($url[2]))
        {
            $controller->{$url[1]}($url[2]);
        }
        else
        {
            if(isset($url[1]))
            {
                $controller->{$url[1]}();
            }
        }
    }
}
?>
