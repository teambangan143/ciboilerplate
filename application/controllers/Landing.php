<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->User->loggedIn()){
            redirect('dashboard');
        }
    }

    public function index()
	{
	    $data['content'] = 'landing';
		$this->load->view('layouts/app', $data);
	}
}
