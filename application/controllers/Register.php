<?php
    class Register extends CI_Controller{

        function __construct(){
            parent::__construct();		
            $this->load->model('m_login');
     
        }
 
        
        function index(){
            $this->load->view('v_register');
        }
    
        function aksi_regist(){
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
     
            $data = array(
                'nip' => $nip,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'role' => "user"
                );
            $this->m_login->input_data($data,'user_ecuti');
            redirect('login?pesan=regist-sukses');
        }
    
    }
?>