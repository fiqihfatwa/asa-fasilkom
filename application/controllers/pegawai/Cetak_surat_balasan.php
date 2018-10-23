<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_surat_balasan extends CI_Controller {

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
		$this->load->model('Pegawai_model','dbObject');
		if($this->session->userdata('group_id')!='2'&&$this->session->userdata('loggedIn')!=TRUE){
			redirect(base_url("auth/logout"));
		}
		// if($this->session->userdata('loggedIn')==TRUE){
		// }else {
		// 	redirect(base_url());
		// }
	}

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$id_jenis = $_GET['id_jenis'];
			$ids = $_GET['id'];
			if($id_jenis==1)
			{
				$this->cetak_keterangan_surat_aktif_kuliah($ids);
			}

	}else{
			redirect(base_url());
		}
	}

	public function cetak_keterangan_surat_aktif_kuliah($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['title']='Surat Tanda Aktif Kuliah';
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/balasan/cetak-surat-aktif-kuliah',$data);
		}else {
			redirect(base_url());
		}
	}


}
