<?php

    class Products_List extends CI_Controller{
        public function index(){
            
            if(null== $this->session->userdata('email')){
                redirect(base_url('login'));
                return;
            }
            $this->load->model('Products_Model');
            $data['products'] = $this->Products_Model->products_list();
            $this->load->view('products_page',$data);
        }
    }

?>