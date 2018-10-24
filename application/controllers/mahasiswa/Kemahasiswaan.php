<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemahasiswaan extends CI_Controller {

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
		$data['title'] = "Kemahasiswaan";

		$terusan = $this->uri->segment(2);

		$data['jenis_surat'] = $this->dbObject->get_jenis_surat($terusan);
		$data['jumlah_surat'] = count($this->dbObject->surat_saya());
		$data['surat_ditolak'] = count($this->dbObject->surat_ditolak());
		$data['surat_selesai'] = count($this->dbObject->surat_selesai());
		$data['surat_onprosess'] = count($this->dbObject->surat_onprosess());
		$data['surat_pending'] = count($this->dbObject->surat_pending());

		$this->load->view('templates_mahasiswa/header',$data);
    $this->load->view('templates_mahasiswa/navbar',$data);
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/kemahasiswaan/index',$data);
    $this->load->view('templates_mahasiswa/footer');
	}


	public function get_jenis_surat()
	{
		$id_jenis = $_GET['id_jenis'];

		if($id_jenis == 1){
			$this->surat_keterangan_aktif_kuliah($id_jenis);
		}elseif ($id_jenis == 2) {
			$this->surat_pernyataan_masih_kuliah($id_jenis);
		}
	}

	public function surat_keterangan_aktif_kuliah($id_jenis)
	{
		$data['form_surat']=$this->dbObject->get_form_surat($id_jenis);
		if(isset($_POST['kirim'])){

			$param[0]=$this->session->userdata('nama');
			$param[1]=$this->session->userdata('nim');
			//$param[2]=$this->session->userdata('prodi');
			$param[2]=$_POST['tempat'];
			$param[3]=$_POST['tglLahir'];
			$param[4]=$_POST['alamat'];
			$param[5]=$_POST['hp'];
			$param[6]=$_POST['email'];
			$param[7]=$_POST['ThnMsk'];
			$param[8]=$_POST['semester'];
			$param[9]=$_POST['rencanaTamat'];
			$param[10]=$_POST['ips'];
			$param[11]=$_POST['ipk'];
			$param[12]=$_POST['keterangan'];


						$save_spp = $_FILES['spp']['tmp_name'];
						$sppfolder = basename($_FILES['spp']['name']);
						$tipe = $_FILES['spp']['type'];
						$tipe = explode("/",$tipe);
						$sp = 'SPP'.'-'.$this->session->userdata('nim');
						$param[13] = "$sp.$tipe[1]";
						$sppfolder = "berkas_mahasiswa/documents/$param[13]";
						move_uploaded_file($save_spp,$sppfolder);

						$save_ktm = $_FILES['ktm']['tmp_name'];
						$ktm_folder = basename($_FILES['ktm']['name']);
						$tipe = $_FILES['ktm']['type'];
						$tipe = explode("/",$tipe);
						$ktm = 'KTM'.'-'.$this->session->userdata('nim');
						$param[14] = "$ktm.$tipe[1]";
						$ktm_folder = "berkas_mahasiswa/documents/$param[14]";
						move_uploaded_file($save_ktm,$ktm_folder);

						$param[15]=$_POST['nama_ortu'];
						$param[16]=$_POST['alamat_ortu'];
						$param[17]=$_POST['j_studi'];
						$param[18]=$_POST['dept'];
						$param[19]=$_POST['prodi'];

						date_default_timezone_set('Asia/Jakarta');
						$date = date("Y-m-d");
						$nim = $this->session->userdata('nim');

						$dataForm = array(
							'id_jenis' => $id_jenis,
							'tanggal_masuk' => $date,
							'nim' => $nim
						);

						$this->dbObject->create_surat_masuk($dataForm);

						$get_id_isi = $this->dbObject->get_id_isi();
						foreach ($get_id_isi as $row) {
							$id_isi = $row->max_id;
						}

						//var_dump($id_isi);die;

						$i=0;
						foreach ($data['form_surat'] as $row) {
							$sql = $this->db->query("INSERT into detail_surat (id_isi,id_surat,keterangan) values ('".$id_isi."','".$row->id_surat."','".$param[$i]."')");
							++$i;
						}
						$this->session->set_flashdata('notif','<div class="alert alert-success">Pengajuan surat berhasil dikirim</div>');
						redirect('mahasiswa/kemahasiswaan');

		}else{
		$data['title']='surat keterangan aktif kuliah';
		$data['id_jenis']=$id_jenis;
		$this->load->view('mahasiswa/kemahasiswaan/formsurat/keterangan_aktif_kuliah',$data);
		}
	}

	public function surat_pernyataan_masih_kuliah($id_jenis)
	{
		$data['form_surat']=$this->dbObject->get_form_surat($id_jenis);

		if(isset($_POST['kirim'])){

			$param[0]=$this->session->userdata('nama');
			$param[1]=$this->session->userdata('nim');
			//$param[2]=$this->session->userdata('prodi');
			$param[2]=$_POST['tempat'];
			$param[3]=$_POST['tglLahir'];
			$param[4]=$_POST['alamat'];
			$param[5]=$_POST['hp'];
			$param[6]=$_POST['email'];
			$param[7]=$_POST['ThnMsk'];
			$param[8]=$_POST['semester'];
			$param[9]=$_POST['rencanaTamat'];
			$param[10]=$_POST['ips'];
			$param[11]=$_POST['ipk'];
			$param[12]=$_POST['keterangan'];


						$save_spp = $_FILES['spp']['tmp_name'];
						$sppfolder = basename($_FILES['spp']['name']);
						$tipe = $_FILES['spp']['type'];
						$tipe = explode("/",$tipe);
						$sp = 'SPP'.'-'.$this->session->userdata('nim');
						$param[13] = "$sp.$tipe[1]";
						$sppfolder = "berkas_mahasiswa/documents/$param[13]";
						move_uploaded_file($save_spp,$sppfolder);

						$save_ktm = $_FILES['ktm']['tmp_name'];
						$ktm_folder = basename($_FILES['ktm']['name']);
						$tipe = $_FILES['ktm']['type'];
						$tipe = explode("/",$tipe);
						$ktm = 'KTM'.'-'.$this->session->userdata('nim');
						$param[14] = "$ktm.$tipe[1]";
						$ktm_folder = "berkas_mahasiswa/documents/$param[14]";
						move_uploaded_file($save_ktm,$ktm_folder);

						$save_sk = $_FILES['skortu']['tmp_name'];
						$sk_folder = basename($_FILES['skortu']['name']);
						$tipe = $_FILES['skortu']['type'];
						$tipe = explode("/",$tipe);
						$sk = 'SK-Orangtua'.'-'.$this->session->userdata('nim');
						$param[15] = "$ktm.$tipe[1]";
						$sk_folder = "berkas_mahasiswa/documents/$param[15]";
						move_uploaded_file($save_sk,$sk_folder);

						$param[16]=$_POST['nama_ortu'];
						$param[17]=$_POST['nip'];
						$param[18]=$_POST['pangkat'];
						$param[19]=$_POST['golongan'];
						$param[20]=$_POST['jabatan'];
						$param[21]=$_POST['instansi'];
						$param[22]=$_POST['kec'];
						$param[23]=$_POST['kab'];
						$param[24]=$_POST['kota'];
						$param[25]=$_POST['j_studi'];
						$param[26]=$_POST['dept'];
						$param[27]=$_POST['prodi'];

						date_default_timezone_set('Asia/Jakarta');
						$date = date("Y-m-d");
						$nim = $this->session->userdata('nim');

						$dataForm = array(
							'id_jenis' => $id_jenis,
							'tanggal_masuk' => $date,
							'nim' => $nim
						);

						$this->dbObject->create_surat_masuk($dataForm);

						$get_id_isi = $this->dbObject->get_id_isi();
						foreach ($get_id_isi as $row) {
							$id_isi = $row->max_id;
						}

						//var_dump($id_isi);die;

						$i=0;
						foreach ($data['form_surat'] as $row) {
							$sql = $this->db->query("INSERT into detail_surat (id_isi,id_surat,keterangan) values ('".$id_isi."','".$row->id_surat."','".$param[$i]."')");
							++$i;
						}
						$this->session->set_flashdata('notif','<div class="alert alert-success">Pengajuan surat berhasil dikirim</div>');
						redirect('mahasiswa/kemahasiswaan');

		}else{
		$data['title']='surat pernyataan masih kuliah';
		$data['id_jenis']=$id_jenis;
		$this->load->view('mahasiswa/kemahasiswaan/formsurat/pernyataan_masih_kuliah',$data);
		}

	}

}
