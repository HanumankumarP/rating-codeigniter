<?php

    class User_Model extends CI_Model{
        
        public function register($name,$email,$pass){
            $query="insert into users(Name,email,password) values('$name','$email','$pass')";
	        return $this->db->query($query);
        }

        public function login($email,$pass){
            $query="select email,Name from users where email='$email' and password='$pass'";
            $result = $this->db->query($query);
            return $result;

        }
        
    }

?>