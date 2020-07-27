<?php
    //MODEL
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login_m extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            //$this->load->model("login_m");
        }

        public function login_check($id){
            $sql = "SELECT * FROM ADMIN_CSN WHERE USER_ID = '".$id."'";
            $query = $this->db->query($sql);

            return $query->result_array();
        }

    }
?>