<?php 
 
class M_cuti extends CI_Model{	
	
	private $_table = "kontak";
	
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function cek_cuti($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}