<?php
class Pegawai_model extends CI_Model
{
  public function permohonan_permimntaan_surat_masuk()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat where jenis_surat.terusan='$terusan' and status_surat='pending' group by isi_surat.id_isi order by tanggal_masuk desc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function checkDataMahasiswa($nim)
  {
    $sql="SELECT * from mahasiswa where nim='$nim'";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function check_kelengkapan_berkas($id_isi){
    $sql="SELECT * FROM detail_surat join surat on surat.id_surat=detail_surat.id_surat WHERE id_isi='$id_isi'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function cek_surat_mahasiswa($id){
    $sql = "SELECT * from isi_surat join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis join mahasiswa on mahasiswa.nim = isi_surat.nim where id_isi='$id'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function insertBalasan($dataBalasan)
  {
    $sql = $this->db->insert('surat_balasan',$dataBalasan);
  }

  public function updateIsiSurat($id){
    $data = array('status_surat'=> 'ditolak');
    $this->db->where('id_isi',$id);
    return $this->db->update('isi_surat',$data);
  }

  public function updateIsiSuratDiterima($id){
    date_default_timezone_set('Asia/Jakarta');
    $data = array(
      'status_surat'=> 'On Process',
      'tanggal_proses'=> date("Y-m-d")
    );
    $this->db->where('id_isi',$id);
    return  $this->db->update('isi_surat',$data);
  }

  public function insertNotif($dataForm){
    $this->db->insert('notif_surat_mahasiswa',$dataForm);
  }

  public function insertLogPegawai($isi_log){
    $dataForm = array('isi_log' => $isi_log );
    $this->db->insert('log_pegawai',$dataForm);
  }

  public function status_surat_on_process()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    //$sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat where jenis_surat.terusan='$terusan' and status_surat='on process' group by isi_surat.id_isi order by tanggal_masuk desc";
    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat inner join surat_balasan on surat_balasan.id_jenis=jenis_surat.id_jenis where jenis_surat.terusan='$terusan' and status_surat='on process' group by isi_surat.id_isi order by tanggal_masuk desc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function status_surat_on_pending()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat inner join surat_balasan on surat_balasan.id_jenis=jenis_surat.id_jenis where jenis_surat.terusan='$terusan' and status_surat='Pending' group by isi_surat.id_isi order by tanggal_masuk desc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function status_surat_ditolak()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat inner join surat_balasan on surat_balasan.id_jenis=jenis_surat.id_jenis where jenis_surat.terusan='$terusan' and status_surat='Ditolak' group by isi_surat.id_isi order by tanggal_masuk desc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function status_surat_selesai()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat where jenis_surat.terusan='$terusan' and status_surat='Selesai' group by isi_surat.id_isi order by tanggal_keluar desc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function cek_no_resi($no_resi){
    $sql= "SELECT * from isi_surat where resi='$no_resi'";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function update_surat_selesai($no_resi,$id)
  {

    date_default_timezone_set('Asia/Jakarta');
    $data = array(
      'status_surat'=> 'On selesai',
      'tanggal_keluar'=> date("Y-m-d H:i:s"),
      'resi'=>$no_resi
    );
    $this->db->where('id_isi',$id);
    return  $this->db->update('isi_surat',$data);
  }

  public function get_proses_surat_selesai($id)
  {
    $sql = "SELECT proses, selesai from notif_surat_mahasiswa where id_surat='$id' and proses='Y' and selesai='Y'";
    $query = $this->db->query($sql);
    return $query->num_rows();
  }

  public function status_surat_pending_weekly()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $date = date('Y-m-d');
    $firstDate = date('Y-m-d',strtotime("monday this week"));
    $lastDate = date('Y-m-d',strtotime("sunday this week"));

    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi AND DATE_FORMAT(isi_surat.tanggal_masuk,'%Y-%m-%d')>='$firstDate'
    AND DATE_FORMAT(isi_surat.tanggal_masuk,'%Y-%m-%d')<='$lastDate'
    join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat inner join surat_balasan
    on surat_balasan.id_jenis=jenis_surat.id_jenis where jenis_surat.terusan='$terusan'
    and status_surat='Pending' group by isi_surat.id_isi order by tanggal_masuk desc";

    $query=$this->db->query($sql);
    return $query->result();
  }

  public function status_surat_on_process_weekly()
  {
    $bagian = $this->session->userdata('bagian');
    if($bagian=='Pegawai Kasub Akademik' or $bagian=='Pegawai Prodi'){
      $terusan = 'Akademik';
    }else{
      $terusan = 'Kemahasiswaan';
    }
    $date = date('Y-m-d');
    $firstDate = date('Y-m-d',strtotime("monday this week"));
    $lastDate = date('Y-m-d',strtotime("sunday this week"));

    $sql="SELECT * from detail_surat join isi_surat on isi_surat.id_isi=detail_surat.id_isi AND DATE_FORMAT(isi_surat.tanggal_proses,'%Y-%m-%d')>='$firstDate'
    AND DATE_FORMAT(isi_surat.tanggal_proses,'%Y-%m-%d')<='$lastDate'
    join jenis_surat on jenis_surat.id_jenis= isi_surat.id_jenis join surat on surat.id_surat = detail_surat.id_surat inner join surat_balasan
    on surat_balasan.id_jenis=jenis_surat.id_jenis where jenis_surat.terusan='$terusan'
    and status_surat='on process' group by isi_surat.id_isi order by tanggal_masuk desc";

    $query=$this->db->query($sql);
    return $query->result();
  }


}
?>
