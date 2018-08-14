<?php


class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->User->loggedIn()){
            redirect('login');
        }
    }


    public function index()
    {
        $data['content'] = 'dashboard';

        $this->load->view('layouts/app',$data);
    }

}