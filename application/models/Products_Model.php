<?php
    class Products_Model extends CI_Model{
        public function products_list(){
            $query = $this->db->query("select * from products");
            return $query->result();
        }

        public function product($id)
        {
            $query = $this->db->query("select * from products where id='$id'");
            return $query->result()[0];
        }

        public function rate($id,$rate,$email){
            $query = $this->db->query("insert into rating(email,product_id,rating) values('$email','$id','$rate');");
            return $query;
        }

        public function rating($id)
        {
            $query = $this->db->query("select count(distinct email) as num ,avg(rating) as rate from rating where product_id='$id'");
            return $query->result()[0];
        }

        public function isRated($id,$email){
            $query = $this->db->query("select * from rating where product_id='$id' and email='$email'");
            return $query->num_rows();
        }
    }
?>