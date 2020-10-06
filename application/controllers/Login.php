<?php
    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();		
            $this->load->model('m_login');
     
        }
 
        
        function index(){
            $this->load->view('v_login');
        }
    
        function aksi_login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => $password
                );
            $cek = $this->m_login->cek_login("user_ecuti",$where)->num_rows();
            if($cek > 0){
                $hasil = $this->m_login->cek_login("user_ecuti",$where);
                $user = $hasil->result()[0];
    
                $data_session = array(
                    'nip' => $user->NIP,
                    'nama' => $user->nama,
                    'role' => $user->role,
                    'username' => $user->username,
                    'status' => "login"
                    );
    
                $this->session->set_userdata($data_session);
    
                redirect(base_url("home"));
    
            }else{
                redirect(base_url("login?pesan=gagal"));
            }
        }
    
        function logout(){
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }

    }
?>