<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_kelengkapan_berkas extends CI_Controller {

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
	}

	public function index()
	{
		if($this->session->userdata('loggedIn')==TRUE){
	 	$id_isi = $_POST['id_isi'];
	 	$nim = $_POST['nim'];
	 //	$query = mysqli_query($koneksi, "SELECT * FROM detail_surat join surat on surat.id_surat=detail_surat.id_surat WHERE id_isi='$id_isi'");
	 	$checkBerkas = $this->dbObject->check_kelengkapan_berkas($id_isi);
	   //   while($dat = mysqli_fetch_assoc($query)){
		 foreach ($checkBerkas as $dat) {
		 	// code...
	         $data[$dat['name']]['isi'] = $dat['keterangan'];
	         $data[$dat['name']]['form'] = $dat['form_surat'];
	         $data[$dat['name']]['type'] = $dat['type'];
	     //  }
		 }
	 	//$query = mysqli_query($koneksi, "select * from data_mahasiswa where nim='$nim'");
	 	//$mhs = mysqli_fetch_assoc($query);
	 	header("Content-Type:application/json");
	 	echo json_encode($data);
		}else {
			redirect(base_url());
		}
	}
}
