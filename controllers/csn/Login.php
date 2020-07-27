<?php
    //CONTROLLER
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("/csn/login_m");
        }

        public function index()
        {
            $this->load->view('/csn/login');
        }

        public function login_check(){
            $id = $this->input->post("user_id");
            $pw = $this->input->post("user_pass");

            $login_ok = $this->login_m->login_check($id);

            if(empty($login_ok)) {
                //아이디가 존재하지 않을 경우
                echo "<script>";
                echo "alert('아이디가 존재하지 않습니다.');";
                echo "history.back(-1)";
                echo "</script>";
            }
            else {
            //아이디가 존재하는 경우
                if($pw == $login_ok[0]["USER_PW"]) {
                   //비밀번호가 일치하는 경우
                    echo "<script>";
                    echo "location.href='/csn/login';";
                    echo "</script>";
                }
                else
                {
                    //비밀번호가 일치하지 않을 경우
                    echo '<script>';
                    echo 'alert("비밀번호가 일치하지 않습니다.");';
                    echo 'history.back(-1);';
                    echo '</script>';
                }
            }
        }
    }
?>