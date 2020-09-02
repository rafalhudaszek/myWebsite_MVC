<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
        session_start();
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $_SESSION['url'] = $url[0];
    }

    public function loadModel($name)
    {
    	$path = 'model/' .$name. '_model.php';
    	if(file_exists($path))
    	{
    		require_once $path;

    		$modelName = $name . '_Model';
    		$this->model = new $modelName();
    	}
    }
}


?>