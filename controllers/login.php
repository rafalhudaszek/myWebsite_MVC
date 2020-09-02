<?php

class Login extends Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->view->msg = 'Login time';

        $this->view->render('login/index');
   
    }

    public function run()
    {
        $this->model->run();
    }


    public function __call($name, $arguments)
    {
        echo "$name function with". $arguments .'dont exist';
    }
}
