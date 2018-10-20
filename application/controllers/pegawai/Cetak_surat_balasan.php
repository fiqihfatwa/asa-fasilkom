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

			if($id_jenis == 1)
			{
				$this->cetak_surat_pengajuan_ujian_khusus($ids);
			}
			elseif($id_jenis == 2)
			{
				$this->cetak_surat_pendaftaran_praktikum_I($ids);
			}
			elseif($id_jenis == 4)
			{
				$this->cetak_surat_aktif_kuliah_kembali($ids);
			}
			elseif($id_jenis == 5)
			{
				$this->cetak_surat_mengundurkan_diri($ids);
			}
			elseif($id_jenis == 6)
			{
				$this->cetak_surat_pembayaran_spp($ids);
			}
			elseif($id_jenis == 7)
			{
				$this->cetak_surat_pka($ids);
			}
			elseif($id_jenis == 8)
			{
				$this->cetak_surat_bimbingan_skripsi($ids);
			}
			elseif($id_jenis == 9)
			{
				$this->cetak_surat_pp_judul_skripsi($ids);
			}
			elseif($id_jenis == 10)
			{
				$this->cetak_surat_ijin_penelitians1($ids);
			}
			elseif($id_jenis == 11)
			{
				$this->cetak_surat_pengganti_ijazah($ids);
			}
			elseif($id_jenis == 12)
			{
				$this->cetak_surat_akreditasi_prodi($ids);
			}
			elseif($id_jenis == 13)
			{
				$this->cetak_surat_aktif_kuliah($ids);
			}
			elseif($id_jenis == 14)
			{
				$this->cetak_surat_kehilangan_krs($ids);
			}
				elseif($id_jenis == 33)
			{
				$this->cetak_surat_kehilangan_khs($ids);
			}
			elseif($id_jenis == 15)
			{
				$this->cetak_surat_absen_perkuliahan($ids);
			}
			elseif($id_jenis == 16)
			{
				$this->cetak_surat_biaya_tanggungan($ids);
			}
			elseif($id_jenis == 17)
			{
				$this->cetak_surat_ijin_penelitiand3($ids);
			}
			elseif($id_jenis == 18)
			{
				$this->cetak_surat_judul_ta($ids);
			}
			elseif($id_jenis == 20)
			{
				$this->cetak_surat_kehilangan_ktm($ids);
			}
			elseif($id_jenis == 21)
			{
				$this->cetak_surat_permohonan_transkrip_nilai_sementara($ids);
			}
			elseif($id_jenis == 22)
			{
				$this->cetak_surat_permohonan_pengambilan_ijazah($ids);
			}
			elseif($id_jenis == 23)
			{
				$this->cetak_surat_keterangan_pengambilan_transkrip_nilai($ids);
			}
				elseif($id_jenis == 24)
			{
				$this->cetak_surat_permohonan_magang($ids);
			}
				 elseif($id_jenis == 25)
			{
				$this->cetak_surat_permohonan_undangan_sempro_penguji($ids);
			}
				elseif($id_jenis == 26)
			{
				$this->cetak_surat_permohonan_undangan_sempro_pembimbing($ids);
			}
				elseif($id_jenis == 27)
			{
				$this->cetak_surat_permohonan_mengikuti_ujian_komprehensif($ids);
			}
				elseif($id_jenis == 32)
			{
				$this->cetak_surat_permohonan_undangan_meja_hijau($ids);
			}
				elseif($id_jenis == 28)
			{
				$this->cetak_surat_permohonan_bukti_penyerahan_skripsi($ids);
			}
				elseif($id_jenis == 29)
			{
				$this->cet_surat_permohonan_keterangan_alumni($ids);
			}
				elseif($id_jenis == 30)
			{
				$this->cetak_surat_permohonan_penerbitan_karya_ilmiah($ids);
			}
				 elseif($id_jenis == 31)
			{
				$this->cetak_surat_permohonan_keterangan_tanda_lulus($ids);
			}
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pengajuan_ujian_khusus($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak_surat_pengajuan_ujian_khusus',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pendaftaran_praktikum_I($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-pendaftaran-praktikum-I',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_aktif_kuliah_kembali($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak_surat_aktif_kuliah_kembali',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_mengundurkan_diri($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-mengundurkan-diri',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pembayaran_spp($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-pembayaran-spp',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pka($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-pka',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_bimbingan_skripsi($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-bimbingan-skripsi',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pp_judul_skripsi($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-pp-judul-skripsi',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_ijin_penelitians1($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-ijin-penelitians1',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_pengganti_ijazah($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-pengganti-ijazah',$data);
		}else {
			redirect(base_url());
		}
	}


	public function cetak_surat_akreditasi_prodi($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-akreditasi-prodi',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_aktif_kuliah($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-aktif-kuliah',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_kehilangan_krs($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-kehilangan-krs',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_kehilangan_khs($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-kehilangan-khs',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_absen_perkuliahan($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-absen-perkuliahan',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_biaya_tanggungan($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-biaya-tanggungan',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_ijin_penelitiand3($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-ijin-penelitiand3',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_judul_ta($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-judul-ta',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_kehilangan_ktm($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-kehilangan-ktm',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_transkrip_nilai_sementara($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-transkrip-nilai-sementara',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_pengambilan_ijazah($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-pengambilan-ijazah',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_keterangan_pengambilan_transkrip_nilai($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-keterangan-pengambilan-transkrip-nilaih',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_magang($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-magang',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_undangan_sempro_penguji($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-undangan-sempro-penguji',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_undangan_sempro_pembimbing($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-undangan-sempro-pembimbing',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_mengikuti_ujian_komprehensif($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-mengikuti-ujian-komprehensif',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_undangan_meja_hijau($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-undangan-meja-hijau',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_bukti_penyerahan_skripsi($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-bukti-penyerahan-skripsi',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cet_surat_permohonan_keterangan_alumni($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-keterangan-alumni',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_penerbitan_karya_ilmiah($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-penerbitan-karya-ilmiah',$data);
		}else {
			redirect(base_url());
		}
	}

	public function cetak_surat_permohonan_keterangan_tanda_lulus($ids)
	{
		if($this->session->userdata('loggedIn')==TRUE){
			$data['detail_surat']=$this->dbObject->check_kelengkapan_berkas($ids);
			$this->load->view('pegawai/cetak/cetak-surat-permohonan-keterangan-tanda-lulus',$data);
		}else {
			redirect(base_url());
		}
	}


}
