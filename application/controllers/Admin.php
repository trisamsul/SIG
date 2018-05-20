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
}
