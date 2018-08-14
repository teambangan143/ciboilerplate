<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->User->loggedIn()){

            $allowed = array(
                'logout'
            );
            //IF AUTHENTICATED REDIRECT TO DASHBOARD
            if(!in_array($this->router->fetch_method(), $allowed)){
                redirect('dashboard');
            }
        }
    }



    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->User->login($username, $password);

            if ($user_id) {
                $user = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true,
                );

                $this->session->set_userdata($user);
                redirect('dashboard');
            } else {
                redirect('login');
            }
        }
    }

    public function register()
    {

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function showLogin()
    {
        $data['content'] = 'auth/login';
        return $this->load->view('layouts/app', $data);
    }

    public function showRegister()
    {
        $data['content'] = 'auth/register';
        return $this->load->view('layouts/app', $data);
    }
}
