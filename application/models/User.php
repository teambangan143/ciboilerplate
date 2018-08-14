<?php

class User extends CI_Model
{

    public $username;
    public $password;
    public $name;
    public $role;


    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $users = $this->db->get('users');

        if ($users->num_rows() == 1) {
            return $users->row(0)->id;
        } else {
            return false;
        }
    }

    public function LoggedIn()
    {
        $user = $this->session->userdata('logged_in');
        return !empty($user);
    }
}