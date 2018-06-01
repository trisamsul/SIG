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
		if($this->session->userdata('category') == 1){
			$this->head['user'] = $this->ModelUser->selectAll()->num_rows();
			$this->head['swk'] = $this->ModelSWK->selectAll()->num_rows();
			$this->head['kecamatan'] = $this->ModelKecamatan->selectAll()->num_rows();
			$this->head['kualitas'] = $this->ModelKualitasLingkungan->selectAll()->num_rows();
		}else{
			$this->head['user'] = $this->ModelUser->selectAll()->num_rows();
			$this->head['swk'] = $this->ModelSWK->selectAllShow()->num_rows();
			$this->head['kecamatan'] = $this->ModelKecamatan->selectAllShow()->num_rows();
			$this->head['kualitas'] = $this->ModelKualitasLingkungan->selectAllShow()->num_rows();
		}
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

	public function privilage()	{
		$this->load->view('admin/privilage');
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
				'category'  => $data['user_category'],
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
		if(is_logged_in()){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/changepass');
			$this->load->view('admin/layouts/footer');		
		}else{
			redirect('admin/login/failed');				
		}
	}

	public function updatePass(){
		if(is_logged_in()){
			$form = $this->input->post();
			$data = $this->ModelUser->check($this->session->userdata('username'),md5($form['old']))->row_array();
			$update['user_password'] = md5($form['new']);
			$this->ModelUser->update($data['user_id'],$update);
			redirect('admin/');
		}else{
			redirect('admin/login/failed');				
		}
	}

	public function userAll(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$data['all'] = $this->ModelUser->selectAll()->result_array();
				$this->load->view('admin/layouts/header',$this->head);
				$this->load->view('admin/userAll',$data);
				$this->load->view('admin/layouts/footer');
			}else{
				redirect('admin/privilage');
			}
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function userPost(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$this->load->view('admin/layouts/header',$this->head);
				$this->load->view('admin/userPost');
				$this->load->view('admin/layouts/footer');
			}else{
				redirect('admin/privilage');
			}
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function userAdd(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$data = $this->input->post();
				$data['user_password'] = md5($data['user_password']);
				$this->ModelUser->insert($data);
				redirect('admin/userAll/success');
			}else{
				redirect('admin/privilage');
			}
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function userRemove($id){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$this->ModelUser->delete($id);
				redirect('admin/userAll/delete');
			}else{
				redirect('admin/privilage');
			}
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanAll(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$data['all'] = $this->ModelKecamatan->selectAll()->result_array();
			}else{
				$data['all'] = $this->ModelKecamatan->selectAllShow()->result_array();
			}
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/kecamatanAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanPost(){
		if(is_logged_in()){
			$data['swk'] = $this->ModelSWK->selectAll()->result_array();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/kecamatanPost',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanAdd(){
		if(is_logged_in()){
			$data = $this->input->post();

			if($this->session->userdata('category') == 1){
				$kecamatan_status = 1;
				$kualitas_status = 1;
			}else{
				$kecamatan_status = 0;
				$kualitas_status = 0;
			}
			
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
					'kecamatan_gambar' => $data['kecamatan_gambar'],
					'kecamatan_status' => $kecamatan_status
				);
				
				$insert_id = $this->ModelKecamatan->insert($data_kecamatan);
				
				$data_kualitas = array(
					'kl_kecamatan_id' => $insert_id,
					'kl_temperatur' => $data['kl_temperatur'],
					'kl_kecepatan_angin' => $data['kl_kecepatan_angin'],
					'kl_curah_hujan' => $data['kl_curah_hujan'],
					'kl_kelembapan' => $data['kl_kelembapan'],
					'kl_status' => $kualitas_status
				);
				
				$this->ModelKualitasLingkungan->insert($data_kualitas);
				
				redirect('admin/kecamatanAll/success');
			}
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanEdit($id){
		if(is_logged_in()){
			$data['swk'] = $this->ModelSWK->selectAll()->result_array();
			$data['kecamatan'] = $this->ModelKecamatan->selectById($id)->row_array();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/kecamatanEdit',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanUpdate(){
		if(is_logged_in()){
			$data = $this->input->post();
			$id = $data['kecamatan_id'];
			unset($data['kecamatan_id']);
			unset($data['_wysihtml5_mode']);

			$this->ModelKecamatan->update($id, $data);
			redirect('admin/kecamatanAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kecamatanRemove($id){
		if(is_logged_in()){
			$this->ModelKualitasLingkungan->deleteByIdKecamatan($id);
			$this->ModelKecamatan->delete($id);
			redirect('admin/kecamatanAll/delete');
		}else{
			redirect('admin/login/failed');				
		}
	}

	public function kecamatanStatusSet($id,$status){
		if(is_logged_in()){
			$this->ModelKecamatan->statusSet($id,$status);
			$this->ModelKualitasLingkungan->statusSet($id,$status);
			redirect('admin/kecamatanAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kualitasAll(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$data['all'] = $this->ModelKualitasLingkungan->selectAll()->result_array();
			}else{
				$data['all'] = $this->ModelKualitasLingkungan->selectAllShow()->result_array();
			}
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/kualitasAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kualitasEdit($id){
		if(is_logged_in()){
			$data['kualitas'] = $this->ModelKualitasLingkungan->selectById($id)->row_array();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/kualitasEdit',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function kualitasUpdate(){
		if(is_logged_in()){
			$data = $this->input->post();
			$id = $data['kl_id'];
			unset($data['kl_id']);
			unset($data['_wysihtml5_mode']);

			$this->ModelKualitasLingkungan->update($id, $data);
			redirect('admin/kualitasAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}

	public function kualitasStatusSet($id,$status){
		if(is_logged_in()){
			$this->ModelKualitasLingkungan->statusSet($id,$status);
			redirect('admin/kualitasAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkAll(){
		if(is_logged_in()){
			if($this->session->userdata('category') == 1){
				$data['all'] = $this->ModelSWK->selectAll()->result_array();
			}else{
				$data['all'] = $this->ModelSWK->selectAllShow()->result_array();
			}
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/swkAll',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkPost(){
		if(is_logged_in()){
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/swkPost');
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkAdd(){
		if(is_logged_in()){
			$data = $this->input->post();

			if($this->session->userdata('category') == 1){
				$data += ['swk_status' => 1];
			}else{
				$data += ['swk_status' => 0];
			}

			$this->ModelSWK->insert($data);

			redirect('admin/swkAll/success');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkEdit($id){
		if(is_logged_in()){
			$data['swk'] = $this->ModelSWK->selectById($id)->row_array();
			$this->load->view('admin/layouts/header',$this->head);
			$this->load->view('admin/swkEdit',$data);
			$this->load->view('admin/layouts/footer');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkUpdate(){
		if(is_logged_in()){
			$data = $this->input->post();
			$id = $data['swk_id'];
			unset($data['swk_id']);
			unset($data['_wysihtml5_mode']);

			$this->ModelSWK->update($id, $data);
			redirect('admin/swkAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}
	
	public function swkRemove($id){
		if(is_logged_in()){
			$this->ModelSWK->delete($id);
			redirect('admin/swkAll/delete');
		}else{
			redirect('admin/login/failed');				
		}
	}

	public function swkStatusSet($id,$status){
		if(is_logged_in()){
			$this->ModelSWK->statusSet($id,$status);
			redirect('admin/swkAll/update');
		}else{
			redirect('admin/login/failed');				
		}
	}
}
