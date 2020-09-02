<?php

class View
{
    public function __construct()
    {
        //echo 'View created';
    }

    public function render($name)
    {
    	require_once 'views/header.php';
        require_once 'views/' . $name . '.php';
    	require_once 'views/footer.php';
    }
}

?>