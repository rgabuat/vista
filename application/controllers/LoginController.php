<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->library('session');
    $this->load->helper('form');
}

public function index()
{
    $theme = 'default';
   
    $this->load->view('Admin/template'. '/header');
    $this->load->view('login');
    $this->load->view('Admin/template'. '/footer');

}

public function check_user()
{

    $result = $this->Admin_model->check();


    if(count($result) > 0 )
    {
        $logged_in = array(
            'id' => $result[0]['id'],
            'email' => $this->input->post('email'),
            'is_logged_in' => true,
            'role' => $result[0]['role'],
        );

        $this->session->set_userdata($logged_in);

        if($logged_in['role'] == 1)
        {
            redirect('dashboard');
           
        }
        else 
        {
            redirect(base_url());
        }
       
    }
    else 
    {
        
        redirect('login');

    }
}

public function logout()
{
    $this->session->sess_destroy();
    $this->index();
}


}