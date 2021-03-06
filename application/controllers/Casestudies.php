<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaseStudies extends CI_Controller {

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
	public function index()
	{
		$data['kecamatan'] = $this->ModelKecamatan->selectAll()->result_array();
		$this->load->view('layouts/header');
		$this->load->view('casestudies',$data);
		$this->load->view('layouts/footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['kecamatan'] = $this->ModelKecamatan->search($keyword)->result_array();
		$this->load->view('layouts/header');
		$this->load->view('casestudies',$data);
		$this->load->view('layouts/footer');
	}
	
	public function kecamatan($id)
	{
		$data['kecamatan'] = $this->ModelKecamatan->selectDetail($id)->row_array();
		$this->load->view('layouts/header');
		$this->load->view('kecamatan',$data);
		$this->load->view('layouts/footer');
	}
}
