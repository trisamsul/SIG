<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKualitasLingkungan extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_kualitas_lingkungan";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('tb_kecamatan', 'tb_kecamatan.kecamatan_id = tb_kualitas_lingkungan.kl_kecamatan_id');
		$this->db->limit($from,$offset);
		$this->db->order_by('kecamatan_id','DESC');

		return $this->db->get();
	}

	public function selectAllShow($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('tb_kecamatan', 'tb_kecamatan.kecamatan_id = tb_kualitas_lingkungan.kl_kecamatan_id');
		$this->db->limit($from,$offset);
		$this->db->where('kl_status',1);
		$this->db->order_by('kecamatan_id','DESC');

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->join('tb_kecamatan', 'tb_kecamatan.kecamatan_id = tb_kualitas_lingkungan.kl_kecamatan_id');
		$this->db->where('kl_id',$id);

		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('kl_id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function deleteByIdKecamatan($idk){
		$this->db->where('kl_kecamatan_id',$idk);
		$this->db->delete($this->tableName);
	}

	public function statusSet($id,$status){
		$data = array('kl_status' => $status);

		$this->db->set($data);
		$this->db->where('kl_id',$id);
		return $this->db->update($this->tableName);
	}
}
