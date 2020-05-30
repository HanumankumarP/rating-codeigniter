<?php
    class Product extends CI_Controller{
        public function index(){
            if(null== $this->session->userdata('email')){
                redirect(base_url('login'));
                return;
            }
            $this->load->model('Products_Model');
            $id = $this->input->get('id');
            $email=$this->session->userdata('email');
            if($id==null){
                redirect(base_url('products'));
                return;
            }
            $data['product']=$this->Products_Model->product($id);
            $data['id'] = $id;

            $data['check']= $this->Products_Model->isRated($id,$email);
            
            $data['rating'] = $this->Products_Model->rating($id);
            $this->load->View("product_page",$data);
        }

        public function rate()
        {
            $this->load->model('Products_Model');
            
            if(null== $this->session->userdata('email')){
                redirect(base_url('login'));
                return;
            }
            
            $id = $this->input->get('id');
            if($id==null){
                redirect(base_url('products'));
                return;
            }

            $rate = $this->input->get('rating');
            $email=$this->session->userdata('email');
            $this->Products_Model->rate($id,$rate,$email);

            $data['product']=$this->Products_Model->product($id);
            $data['id'] = $id;
            $data['check']= $this->Products_Model->isRated($id,$email);
            
            $data['rating'] = $this->Products_Model->rating($id);
            $this->load->View("product_page",$data);
        }

        
    }
?>