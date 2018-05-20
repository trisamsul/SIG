<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_user";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);
		$this->db->order_by('user_id');

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('user_id',$id);

		return $this->db->get();
	}

	public function check($username,$password){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('user_username',$username);
		$this->db->where('user_password',$password);

		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('user_id',$id);
		return $this->db->update($this->tableName);
	}
	
	public function saveLog($username,$log){
		$this->db->set($log);
		$this->db->where('user_username',$username);
		return $this->db->update($this->tableName);
	}
	
	public function delete($id){
		$this->db->where('user_id',$id);
		$this->db->delete($this->tableName);
	}

}
