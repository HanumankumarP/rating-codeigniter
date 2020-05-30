<?php

    class Login extends CI_Controller{
        public function index(){
            if(null!= $this->session->userdata('email')){
                redirect(base_url('products'));
                return;
            }
            $this->load->view('login_page');
        }

        
        public function submit(){
            $this->load->library('form_validation');

            $this->load->model('User_Model');

            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if($this->form_validation->run() == FALSE)
            {
                $this->index();
                return;
            }
            else{
                $mail=$this->input->post('email');
                $pass = md5($this->input->post('password'));
                $data = $this->User_Model->login($mail,$pass);
                if($data->num_rows()>0){
                    $this->session->set_userdata('email',$mail);
                    redirect(base_url('products'));
                }else{
                    $this->session->set_flashdata('error',"Invalid credentials");
                    redirect('login');
                }


            }
            
        }
        
        public function logout()
        {
            $this->session->unset_userdata('email');
            $this->load->view('login_page');
        }
    }


?>