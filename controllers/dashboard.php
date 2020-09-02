<?php


class Dashboard extends Controller
{
    function __construct()
    {
        session_start();
        parent::__construct();
        $this->view->render('dashboard/index');
        $logged = $_SESSION['logged'];

    }

    public function logout()
    {
        $this->model->logout();
    }


    public function initTimer()
    {
        $this->model->initTimer();
    }

    public function updateTimer()
    {
        $this->model->updateTimer();
    }
    
}