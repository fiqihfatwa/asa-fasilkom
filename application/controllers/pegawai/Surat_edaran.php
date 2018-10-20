<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_edaran extends CI_Controller {

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
		if($this->session->userdata('group_id')!="2" && $this->session->userdata('loggedIn')!=TRUE){
			redirect(base_url("auth/logout"));
		}

		$this->load->model('Pegawai_model','dbObject');
	}

	public function index()
	{

		$data['title'] = "Surat Edaran";
		$count_permintaan_surat_masuk = count($this->dbObject->permohonan_permimntaan_surat_masuk());
		$data['jumlah_permintaan_surat_masuk']=$count_permintaan_surat_masuk;

		$this->load->view('templates_pegawai/header',$data);
    $this->load->view('templates_pegawai/navbar',$data);
		$this->load->view('templates_pegawai/sidebar');
		$this->load->view('pegawai/surat_edaran/index',$data);
    $this->load->view('templates_pegawai/footer');

	}

}
