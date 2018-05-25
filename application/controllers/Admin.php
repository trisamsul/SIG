<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $head;
	public function __construct(){
		parent::__construct();
		$this->head['user'] = $this->ModelUser->selectAll()->num_rows();
		$this->head['swk'] = $this->ModelSWK->selectAll()->num_rows();
		$this->head['kecamatan'] = $this->ModelKecamatan->selectAll()->num_rows();
		$this->head['kualitas'] = $this->ModelKualitasLingkungan->selectAll()->num_rows();
	}
	public function index()	{
		if(is_logged_in()){
			$count['user'] = $this->ModelUser->selectAll()->num_rows();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/index',$count);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}

	}
	public function login()	{
		$this->load->view('admin/login');
	}
	
	public function auth(){
		$post = $this->input->post();
		$data = $this->ModelUser->check($post['uname'],md5($post['pass']))->row_array();
		$data = $this->ModelUser->check($post['uname'],md5($post['pass']))->row_array();
		if(!isset($data)){
			redirect('admin/login/failed');			
		}else{
			$userdata = array(
				'username'  => $data['user_username'],
				'fullname'  => $data['user_password'],
				'log'  => $data['user_lastlogin'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			
			$time = date('Y-m-d H:i:s');
			$log['user_lastlogin'] = $time;
			
			$this->ModelUser->saveLog($this->session->userdata('username'),$log);
			
			redirect('admin/');			
		}
	}
	
	public function logOut(){
		$time = date('Y-m-d H:i:s');
		$log['user_lastlogin'] = $time;
		
		$this->ModelUser->saveLog($this->session->userdata('username'),$log);
		
		$this->session->sess_destroy();
		redirect('');
	}

	public function changePass(){

		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/changepass');
		$this->load->view('admin/layouts/footer');		
	}

	public function updatePass(){
		$form = $this->input->post();
		$data = $this->ModelUser->check($this->session->userdata('username'),md5($form['old']))->row_array();
		$update['user_password'] = md5($form['new']);
		$this->ModelUser->update($data['user_id'],$update);
		redirect('admin/');
	}

	public function userAll(){
		$data['all'] = $this->ModelUser->selectAll()->result_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/userAll',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function userPost(){
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/userPost');
		$this->load->view('admin/layouts/footer');
	}
	
	public function userAdd(){
		$data = $this->input->post();
		$data['user_password'] = md5($data['user_password']);
		$this->ModelUser->insert($data);
		redirect('admin/userAll/success');
	}
	
	public function userRemove($id){
		$this->ModelUser->delete($id);
		redirect('admin/userAll/delete');
	}
	
	public function kecamatanAll(){
		$data['all'] = $this->ModelKecamatan->selectAll()->result_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/kecamatanAll',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function kecamatanPost(){
		$data['swk'] = $this->ModelSWK->selectAll()->result_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/kecamatanPost',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function kecamatanAdd(){
		$data = $this->input->post();
		
		unset($data['_wysihtml5_mode']);
		
		$config['upload_path']		= './uploads/kecamatan/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;
		$config['file_name']		= "kecamatan_".time();
		
		$this->load->library('upload', $config);
		var_dump($_FILES);

		if(!$this->upload->do_upload('photo')){		
			$error = array('error' => $this->upload->display_errors());
			
			print_r($error);
		}else{
			$data['kecamatan_gambar'] = $config['file_name'].$this->upload->data('file_ext');
			
			$data_kecamatan = array(
				'kecamatan_nama' => $data['kecamatan_nama'],
				'kecamatan_swk_id' => $data['kecamatan_swk_id'],
				'kecamatan_skala' => $data['kecamatan_skala'],
				'kecamatan_populasi' => $data['kecamatan_populasi'],
				'kecamatan_luas' => $data['kecamatan_luas'],
				'kecamatan_kepadatan' => $data['kecamatan_kepadatan'],
				'kecamatan_rth' => $data['kecamatan_rth'],
				'kecamatan_rtnh' => $data['kecamatan_rtnh'],
				'kecamatan_deskripsi' => $data['kecamatan_deskripsi'],
				'kecamatan_gambar' => $data['kecamatan_gambar']
			);
			
			$insert_id = $this->ModelKecamatan->insert($data_kecamatan);
			
			$data_kualitas = array(
				'kl_kecamatan_id' => $insert_id,
				'kl_temperatur' => $data['kl_temperatur'],
				'kl_kecepatan_angin' => $data['kl_kecepatan_angin'],
				'kl_curah_hujan' => $data['kl_curah_hujan'],
				'kl_kelembapan' => $data['kl_kelembapan']
			);
			
			$this->ModelKualitasLingkungan->insert($data_kualitas);
			
			redirect('admin/kecamatanAll/success');
		}
	}
	
	public function kecamatanEdit($id){
		$data['swk'] = $this->ModelSWK->selectAll()->result_array();
		$data['kecamatan'] = $this->ModelKecamatan->selectById($id)->row_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/kecamatanEdit',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function kecamatanUpdate(){
		$data = $this->input->post();
		$id = $data['kecamatan_id'];
		unset($data['kecamatan_id']);
		unset($data['_wysihtml5_mode']);

		$this->ModelKecamatan->update($id, $data);
		redirect('admin/kecamatanAll/update');
	}
	
	public function kecamatanRemove($id){
		$this->ModelKualitasLingkungan->deleteByIdKecamatan($id);
		$this->ModelKecamatan->delete($id);
		redirect('admin/kecamatanAll/delete');
	}
	
	public function kualitasAll(){
		$data['all'] = $this->ModelKualitasLingkungan->selectAll()->result_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/kualitasAll',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function kualitasEdit($id){
		$data['kualitas'] = $this->ModelKualitasLingkungan->selectById($id)->row_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/kualitasEdit',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function kualitasUpdate(){
		$data = $this->input->post();
		$id = $data['kl_id'];
		unset($data['kl_id']);
		unset($data['_wysihtml5_mode']);

		$this->ModelKualitasLingkungan->update($id, $data);
		redirect('admin/kualitasAll/update');
	}
	
	public function swkAll(){
		$data['all'] = $this->ModelSWK->selectAll()->result_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/swkAll',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function swkPost(){
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/swkPost');
		$this->load->view('admin/layouts/footer');
	}
	
	public function swkAdd(){
		$data = $this->input->post();
		$this->ModelSWK->insert($data);
		redirect('admin/swkAll/success');
	}
	
	public function swkEdit($id){
		$data['swk'] = $this->ModelSWK->selectById($id)->row_array();
		$this->load->view('admin/layouts/header',$this->head);
		$this->load->view('admin/swkEdit',$data);
		$this->load->view('admin/layouts/footer');
	}
	
	public function swkUpdate(){
		$data = $this->input->post();
		$id = $data['swk_id'];
		unset($data['swk_id']);
		unset($data['_wysihtml5_mode']);

		$this->ModelSWK->update($id, $data);
		redirect('admin/swkAll/update');
	}
	
	public function swkRemove($id){
		$this->ModelSWK->delete($id);
		redirect('admin/swkAll/delete');
	}
}
