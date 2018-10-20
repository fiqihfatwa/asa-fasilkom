<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_surat_selesai extends CI_Controller {

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

			//include "../../config/session.php";

			$id = $_GET['id'];
			$nama_pegawai = $this->session->userdata('nama');
			// $da = mysqli_query($koneksi,"select * from isi_surat join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis join data_mahasiswa on data_mahasiswa.nim = isi_surat.nim where id_isi='$id'") or die(mysqli_error($koneksi));
			// $dat=mysqli_fetch_array($da) or die(mysqli_error($koneksi));

			$surat_mahasiswa = $this->dbObject->cek_surat_mahasiswa($id);


			foreach ($surat_mahasiswa as $data) {
				$isi_log = $nama_pegawai.' telah selesai membuat '.$data['jenis_surat'].' milik '.$data['nama_depan'].' '.$data['nama_belakang'];
			}

			do{
				$no_resi = rand(0, 99999);
				$cek = $this->dbObject->cek_no_resi($no_resi);
			}while(count($cek)>0);

			$sql = $this->dbObject->update_surat_selesai($no_resi,$id);
			$log = $this->dbObject->insertLogPegawai($isi_log);

			if($sql)
			{
				echo"<script>alert('Surat selesai dibuat,silahkan beri tahu mahasiswa!');document.location='proses_pembuatan_surat';</script>";
			}
			else
			{
				//die(mysqli_error($koneksi));
				echo"<script>alert('Terjadi Kesalahan Server !');window.location='javascript:history.go(-1)';</script>";
			}

		}else{
			redirect(base_url());
		}
	}

}
