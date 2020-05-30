<?php

class Home extends CI_Controller{

    

    public function index(){
        if(null!= $this->session->userdata('email')){
            redirect(base_url('products'));
            return;
        }
        $this->load->view('home_page');
    }

    public function register(){
        $this->load->library('form_validation');

        $this->load->model('User_Model');

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('home_page');
            return;
        }
        else{
            $name=$this->input->post('name');
            $mail=$this->input->post('email');
            $pass = md5($this->input->post('password'));

            if($this->User_Model->register($name,$mail,$pass)){
                $this->session->set_userdata('email',$mail);
                redirect(base_url('products'));
            }else{
                $this->load->view('home_page');
            }


        }
        
    }

}


?>