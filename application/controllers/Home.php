<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
        $this->load->model('m_cuti');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
        }
        
        
	}
 
	function index(){
        $this->load->view('home/v_navbar');
		$this->load->view('home/v_admin');
    }

    function cutiDetail($id){
        $where = array('id_form' => $id);
        $data['form'] = $this->m_cuti->cek_cuti('form_cuti_ecuti',$where)->result();
        $this->load->view('home/v_navbar');
		$this->load->view('home/v_detail_cuti',$data);
    }


	function printDetail($id){
        $where = array('id_form' => $id);
        $data['form'] = $this->m_cuti->cek_cuti('form_cuti_ecuti',$where)->result();
		$this->load->view('home/v_print_detail',$data);
    }

    

    function tambah_Cuti(){
        $this->load->view('home/v_navbar');
		$this->load->view('home/v_add_cuti');
    }
    
    function status_Cuti(){
        $nip = $this->session->userdata("nip");
        $where = array(
            'nip' => $nip
            );

        $data['status'] = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
        $this->load->view('home/v_navbar');
		$this->load->view('home/v_status_cuti',$data);
    }

    function deleteCuti($id){
        $where = array('id_form' => $id);
        $data['form'] = $this->m_cuti->hapus_data($where,'form_cuti_ecuti');
        redirect(base_url("home/status_cuti"));
    }

    function pengajuan_Cuti(){
        $role = $this->session->userdata("role");
        $where = array(
            'lokasi_atasan' => $role
        );
        $data['status'] = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
        $this->load->view('home/v_navbar');
        $this->load->view('home/v_pengajuan_cuti',$data);
    }

    function edit_cutiKaTu(){
        $id = $this->input->post('id');
      
        
        $status_ktu = $this->input->post('status_ktu');
        $pertimbangan_katu = $this->input->post('pertimbangan_katu');
        $status = "Masih proses";

        $where = array(
            'id_form' => $id
        );

        $user = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
        foreach($user as $s){
            $atasan_langsung = $s->tujuan_atasan;
            $lokasi_atasan = $s->lokasi_atasan;

        }

        if($pertimbangan_katu == "disetujui" || $pertimbangan_katu == "perubahan"){
            $lokasi_atasan = "ka_balai";
            $status = "Telah ". $pertimbangan_katu. " Oleh Kepala Sub Bagian Tata Usaha dan Diteruskan ke Kepala Balai";
            
        }else{
            $lokasi_atasan = "user";
            $status = "Telah ". $pertimbangan_katu. " Oleh Kepala TU";
        }

        $data = array(
            'lokasi_atasan' => $lokasi_atasan ,
            'pertimbangan_kepala_tu' => $pertimbangan_katu,
            'status_ktu' => $status_ktu,
            'status' => $status
            );

        

        $this->m_cuti->update_data($where,$data,'form_cuti_ecuti');

        redirect('home/pengajuan_cuti');

    }


    function edit_cutiKaBalai(){
        $id = $this->input->post('id');
      
        
        $status_kabalai = $this->input->post('status_kabalai');
        $pertimbangan_kepala_balai = $this->input->post('pertimbangan_kepala_balai');
        $status = "Masih proses";

        $where = array(
            'id_form' => $id
        );

        $user = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
        foreach($user as $s){
            $atasan_langsung = $s->tujuan_atasan;
            $lokasi_atasan = $s->lokasi_atasan;

        }

        if($pertimbangan_kepala_balai == "disetujui" || $pertimbangan_kepala_balai == "perubahan"){
            $lokasi_atasan = "admin";
            $status = "Telah ". $pertimbangan_kepala_balai. " Oleh Kepala Balai ";
            
        }else{
            $lokasi_atasan = "user";
            $status = "Telah ". $pertimbangan_kepala_balai. " Oleh Kepala Balai";
        }

        $data = array(
            'lokasi_atasan' => $lokasi_atasan ,
            'pertimbangan_kepala_balai' => $pertimbangan_kepala_balai,
            'status_kepala_balai' => $status_kabalai,
            'status' => $status
            );

        

        $this->m_cuti->update_data($where,$data,'form_cuti_ecuti');

        redirect('home/pengajuan_cuti');

    }

    function edit_cuti(){
        $id = $this->input->post('id');
      
        
        $pertimbangan_atasan_langsung = $this->input->post('pertimbangan_atasan_langsung');
        $status_atasan_langsung = $this->input->post('status_atasan');

        $where = array(
            'id_form' => $id
        );


        $user = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
            foreach($user as $s){
                $atasan_langsung = $s->tujuan_atasan;
                $lokasi_atasan = $s->lokasi_atasan;
    
            }
        $status = "Masih proses";
        if($pertimbangan_atasan_langsung == "disetujui" || $pertimbangan_atasan_langsung == "perubahan"){
            $lokasi_atasan = "kepala_tu";
            $status = "Telah ". $pertimbangan_atasan_langsung. " Oleh Atasan Langsung dan Diteruskan ke Kepala Sub Bagian TU";
            
        }else{
            $lokasi_atasan = "user";
            $status = "Telah ". $pertimbangan_atasan_langsung. " Oleh atasan langsung";
        }

        $data = array(
            'lokasi_atasan' => $lokasi_atasan ,
            'pertimbangan_atasan_langsung' => $pertimbangan_atasan_langsung,
            'status_atasan_langsung' => $status_atasan_langsung,
            'status' => $status
            );


        $this->m_cuti->update_data($where,$data,'form_cuti_ecuti');

      
        redirect('home/pengajuan_cuti');
    }


    function edit_cutiAdmin(){
       

        redirect('home/pengajuan_cuti');
    }

    





    // function edit_cuti(){
    //     $id = $this->input->post('id');
      
        
    //     $status_atasan_langsung = $this->input->post('status_atasan');
    //     $status_ktu = $this->input->post('status_ktu');
    //     $status_kabalai = $this->input->post('status_kabalai');
    //     $pertimbangan_atasan_langsung = $this->input->post('pertimbangan_atasan_langsung');
    //     $pertimbangan_katu = $this->input->post('pertimbangan_katu');
    //     $pertimbangan_kepala_balai = $this->input->post('pertimbangan_kepala_balai');
    //     $status = "Masih proses";

    //      var_dump($pertimbangan_atasan_langsung);

    //     $where = array(
    //         'id_form' => $id
    //     );

    //     $user = $this->m_cuti->cek_cuti("form_cuti_ecuti",$where)->result();
    //     foreach($user as $s){
    //         $atasan_langsung = $s->tujuan_atasan;
    //         $lokasi_atasan = $s->lokasi_atasan;

    //     }

    //     if($pertimbangan_atasan_langsung == "disetuji"  && $lokasi_atasan == $atasan_langsung|| 
    //     $pertimbangan_atasan_langsung == "perubahan"   && $lokasi_atasan == $atasan_langsung || 
    //     $pertimbangan_katu == "disetujui" && $lokasi_atasan == "kepala_tu" || 
    //     $pertimbangan_katu == "perubahan" && $lokasi_atasan == "kepala_tu" || 
    //     $pertimbangan_kepala_balai == "disetujui" && $lokasi_atasan == "ka_balai" || 
    //     $pertimbangan_kepala_balai == "perubahan" && $lokasi_atasan == "ka_balai"){
    //         if($atasan_langsung == "kepala_tu"){
    //             $lokasi_atasan = "ka_balai";
    //             $status = "Telah ". $pertimbangan_katu. " Oleh Kepala Sub Bagian Tata Usaha dan Diteruskan ke Kepala Balai";
    //         }elseif($atasan_langsung == "ka_balai"){
    //             $lokasi_atasan = "admin";
    //             $status = "Telah ". $pertimbangan_kepala_balai. " Oleh Kepala Balai";
    //         }else{
    //             $lokasi_atasan = "kepala_tu";
    //             $status = "Telah ". $pertimbangan_atasan_langsung. " Oleh Atasan Langsung dan Diteruskan ke Kepala Sub Bagian Tata Usaha";
    //         }
            
    //     }else{
    //         if($pertimbangan_atasan_langsung == "tidak_disetujui"  || $pertimbangan_atasan_langsung == "ditangguhkan"){
    //             $status = "Telah ". $pertimbangan_atasan_langsung. " Oleh Atasan Langsung";
    //         }elseif($pertimbangan_katu == "tidak_disetuji" || $pertimbangan_katu == "ditangguhkan"){
    //             $status = "Telah ". $pertimbangan_katu. " Oleh Kepala TU";
    //         }elseif($pertimbangan_kepala_balai == "tidak_disetuji" || $pertimbangan_kepala_balai == "ditangguhkan"){
    //             $status = "Telah ". $pertimbangan_katu. " Oleh Kepala Balai";
    //         }
           
    //     }

    //     if($pertimbangan_atasan_langsung == null || $status_atasan_langsung == null){
    //         $data = array(
    //             'lokasi_atasan' => $lokasi_atasan ,
    //             'pertimbangan_kepala_tu' => $pertimbangan_katu,
    //             'status_ktu' => $status_ktu,
    //             'status' => $status
    //             );
    //     }else if($pertimbangan_katu == null || $pertimbangan_atasan_langsung == null){
    //         $data = array(
    //             'lokasi_atasan' => $lokasi_atasan ,
    //             'pertimbangan_kepala_balai' => $pertimbangan_kepala_balai,
    //             'status_kepala_balai' => $status_kabalai,
    //             'status' => $status
    //             );
    //     }else{
    //         $data = array(
    //             'lokasi_atasan' => $lokasi_atasan ,
    //             'pertimbangan_atasan_langsung' => $pertimbangan_atasan_langsung,
    //             'status_atasan_langsung' => $status_atasan_langsung,
    //             'status' => $status
    //             );
    //     }

       
        
      
     
        

        

       
        

    //     $this->m_cuti->update_data($where,$data,'form_cuti_ecuti');

    //     // redirect('home/pengajuan_cuti');

    // }

    function add_cuti(){
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $masakerja = $this->input->post('masakerja');
        $unit_kerja = $this->input->post('unit_kerja');
        $jenis_unit = $this->input->post('jenis_cuti');
        $alasan_cuti = $this->input->post('alasan_cuti');
        $lama_cuti = $this->input->post('lama_cuti');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_akhir = $this->input->post('tanggal_akhir');
        $atasan_langsung = $this->input->post('atasan_langsung');

        if($atasan_langsung == "ka_balai"){
            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'jabatan' => $jabatan,
                'masa_kerja' => $masakerja,
                'unit_kerja' => $unit_kerja,
                'jenis_cuti' => $jenis_unit ,
                'alasan_cuti' => $alasan_cuti,
                'lama_cuti' => $lama_cuti ,
                'mulai_cuti' => $tanggal_mulai , 
                'akhir_cuti' => $tanggal_akhir , 
                'tujuan_atasan' => $atasan_langsung , 
                'lokasi_atasan' => $atasan_langsung ,
                'status_atasan_langsung' => "-",
                'status_ktu' => "-",
                'status_kepala_balai' => null,
                'status' => "Diajukan ke Kepala Balai"
                );
        }elseif($atasan_langsung == "kepala_tu"){
            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'jabatan' => $jabatan,
                'masa_kerja' => $masakerja,
                'unit_kerja' => $unit_kerja,
                'jenis_cuti' => $jenis_unit ,
                'alasan_cuti' => $alasan_cuti,
                'lama_cuti' => $lama_cuti ,
                'mulai_cuti' => $tanggal_mulai , 
                'akhir_cuti' => $tanggal_akhir , 
                'tujuan_atasan' => $atasan_langsung , 
                'lokasi_atasan' => $atasan_langsung,
                'status_atasan_langsung' => "-",
                'status_ktu' => null,
                'status_kepala_balai' => null,
                'status' => "Diajukan ke Kepala TU"
                );

        }else{
            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'jabatan' => $jabatan,
                'masa_kerja' => $masakerja,
                'unit_kerja' => $unit_kerja,
                'jenis_cuti' => $jenis_unit ,
                'alasan_cuti' => $alasan_cuti,
                'lama_cuti' => $lama_cuti ,
                'mulai_cuti' => $tanggal_mulai , 
                'akhir_cuti' => $tanggal_akhir , 
                'tujuan_atasan' => $atasan_langsung , 
                'lokasi_atasan' => $atasan_langsung,
                'status_atasan_langsung' => null,
                'status_ktu' => null,
                'status_kepala_balai' => null,
                'status' => "Diajukan ke atasan langsung"
                );
        }
        
        $this->m_cuti->input_data($data,'form_cuti_ecuti');
        $this->load->view('home/v_navbar');
        redirect('home/status_cuti');
    }

    
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    
    
}

