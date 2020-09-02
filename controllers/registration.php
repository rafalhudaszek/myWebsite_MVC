<?php

class Registration extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('registration/index');
        
    }

    public function run()
    {
        $this->model->run();
    }

}