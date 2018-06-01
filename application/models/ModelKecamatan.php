<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKecamatan extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_kecamatan";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('tb_swk', 'tb_swk.swk_id = tb_kecamatan.kecamatan_swk_id');
		$this->db->limit($from,$offset);
		$this->db->order_by('kecamatan_id','DESC');

		return $this->db->get();
	}

	public function selectAllShow($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('tb_swk', 'tb_swk.swk_id = tb_kecamatan.kecamatan_swk_id');
		$this->db->limit($from,$offset);
		$this->db->where('kecamatan_status',1);
		$this->db->order_by('kecamatan_id','DESC');

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('kecamatan_id',$id);

		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
		$insert_id = $this->db->insert_id();
		
		return $insert_id;
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('kecamatan_id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('kecamatan_id',$id);
		$this->db->delete($this->tableName);
	}
	
	public function selectDetail($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('kecamatan_id',$id);
		$this->db->join('tb_kualitas_lingkungan', 'tb_kualitas_lingkungan.kl_kecamatan_id = tb_kecamatan.kecamatan_id');
		$this->db->join('tb_swk', 'tb_swk.swk_id = tb_kecamatan.kecamatan_swk_id');

		return $this->db->get();
	}

	public function search($keyword){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->like('kecamatan_nama',$keyword);
		$this->db->join('tb_swk', 'tb_swk.swk_id = tb_kecamatan.kecamatan_swk_id');
		$this->db->order_by('kecamatan_nama');

		return $this->db->get();
	}

	public function statusSet($id,$status){
		$data = array('kecamatan_status' => $status);

		$this->db->set($data);
		$this->db->where('kecamatan_id',$id);
		return $this->db->update($this->tableName);
	}
}
