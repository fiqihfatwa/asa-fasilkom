<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_selesai_dibuat extends CI_Controller {

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
	}

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE){
		$data['title'] = "Daftar surat yang selesai dibuat";
		$count_permintaan_surat_masuk = count($this->dbObject->permohonan_permimntaan_surat_masuk());
		$data['jumlah_permintaan_surat_masuk']=$count_permintaan_surat_masuk;
		$data['permintaan_surat_masuk']=$this->dbObject->permohonan_permimntaan_surat_masuk();
		$data['surat_selesai']=$this->dbObject->status_surat_selesai();


		$this->load->view('templates_pegawai/header',$data);
    $this->load->view('templates_pegawai/navbar',$data);
		$this->load->view('templates_pegawai/sidebar');
		$this->load->view('pegawai/proses_surat_selesai/index',$data);
    $this->load->view('templates_pegawai/footer');
	}else {
		redirect(base_url());
		}
	}

	public function notif_surat_selesai()
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$id = $_GET['id'];
			$isi = "Surat Kamu sudah selesai!";
			$read = 'N';
			$proses = 'Y';
			$selesai = 'Y';

			$dataForm = array(
				'isi_notif' => $isi,
				'id_surat' => $id,
				'dibaca' => $read,
				'proses' => $proses,
				'selesai'=> $selesai
			);

			$notif = $this->dbObject->insertNotif($dataForm);

			echo "Notifikasi Terkirim";
		}else {
			redirect(base_url());
			}
	}

}
