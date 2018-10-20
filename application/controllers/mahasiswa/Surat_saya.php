<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_saya extends CI_Controller {

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
	 function __construct()
	 {
	  parent::__construct();
	  // Your own constructor code
	  $this->load->model('Mahasiswa_model','dbObject');
	  if($this->session->userdata('group_id')!='3'&&$this->session->userdata('loggedIn')!=TRUE){
	 	 redirect(base_url("auth/logout"));
	  }
	 }

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE){
		$data['title'] = "Surat saya";
		$data['surat_saya']=$this->dbObject->surat_saya();
		$data['jumlah_surat'] = count($this->dbObject->surat_saya());
		$data['surat_ditolak'] = count($this->dbObject->surat_ditolak());
		$data['surat_selesai'] = count($this->dbObject->surat_selesai());
		$data['surat_onprosess'] = count($this->dbObject->surat_onprosess());
		$data['surat_pending'] = count($this->dbObject->surat_pending());

		$this->load->view('templates_mahasiswa/header',$data);
    $this->load->view('templates_mahasiswa/navbar',$data);
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/surat_saya/index',$data);
    $this->load->view('templates_mahasiswa/footer');
		}else {
			redirect(base_url());
		}
	}
}
