<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terima_surat extends CI_Controller {

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
			$id = $_GET['id'];

				$cek_surat = $this->dbObject->cek_surat_mahasiswa($id);

				$isi = 'Surat anda sedang di proses';
				$read = 'N';
				$proses = 'Y';
				$selesai = 'N';
				$nama_pegawai = $this->session->userdata('nama');

				foreach ($cek_surat as $dat) {
				$isi_log = $nama_pegawai.' telah memeroses '.$dat['jenis_surat'].' milik '.$dat['nama_depan'].' '.$dat['nama_belakang'];
				$nama_surat = $dat['jenis_surat'].' milik '.$dat['nama_depan'].' '.$dat['nama_belakang'];
				$id_jenis = $dat['id_jenis'];
				}

				//$sql = mysqli_query($koneksi,"") or die(mysqli_error($koneksi));
				$dataForm = array(
					'isi_notif' => $isi,
					'id_surat' => $id,
					'proses' => $proses,
					'selesai' => $selesai,
					'dibaca' => $read
					);

					$dataBalasan = array(
						'nama_surat' => $nama_surat,
						'id_jenis' => $id_jenis
					);
				//insert into (isi_notif, id_surat, alasan, proses, selesai, dibaca) VALUES ('$isi','$id','$alasan','$proses','$selesai','$read')
				$sql = $this->dbObject->updateIsiSuratDiterima($id);
				$notif = $this->dbObject->insertNotif($dataForm);
				$log = $this->dbObject->insertLogPegawai($isi_log);
				$balasan = $this->dbObject->insertBalasan($dataBalasan);
				//var_dump($notif);die;

				if($sql)
				{
					echo"<script>alert('Surat segera di proses!');document.location='permintaan_surat_masuk';</script>";
				}
				else
				{
					//die(mysql_error());
					echo"<script>alert('Terjadi Kesalahan Server !');window.location='javascript:history.go(-1)';</script>";
				}
		}else {
			redirect(base_url());
		}
	}
}
