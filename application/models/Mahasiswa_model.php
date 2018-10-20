<?php
class Mahasiswa_model extends CI_Model
{
  public function get_jenis_surat($terusan)
  {
    $sql = "SELECT * FROM jenis_surat WHERE terusan like '%$terusan%'";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function get_form_surat($id_jenis)
  {
    $sql = "SELECT * FROM surat WHERE id_jenis='$id_jenis'";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function get_id_isi()
  {
    $sql="SELECT max(id_isi) as max_id from isi_surat";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create_surat_masuk($dataForm)
  {
    $this->db->insert('isi_surat',$dataForm);
  }

  public function surat_saya()
  {
    $nim = $this->session->userdata('nim');
    $sql="SELECT * from isi_surat inner join mahasiswa on isi_surat.nim=mahasiswa.nim inner join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis  where isi_surat.nim='$nim' order by id_isi DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function surat_pending()
  {
    $nim = $this->session->userdata('nim');
    $sql="SELECT * from isi_surat inner join mahasiswa on isi_surat.nim=mahasiswa.nim inner join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis  where isi_surat.nim='$nim' and isi_surat.status_surat='Pending' order by id_isi DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function surat_onprosess()
  {
    $nim = $this->session->userdata('nim');
    $sql="SELECT * from isi_surat inner join mahasiswa on isi_surat.nim=mahasiswa.nim inner join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis  where isi_surat.nim='$nim' and isi_surat.status_surat='On Process' order by id_isi DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function surat_selesai()
  {
    $nim = $this->session->userdata('nim');
    $sql="SELECT * from isi_surat inner join mahasiswa on isi_surat.nim=mahasiswa.nim inner join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis  where isi_surat.nim='$nim' and isi_surat.status_surat='Selesai' order by id_isi DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function surat_ditolak()
  {
    $nim = $this->session->userdata('nim');
    $sql="SELECT * from isi_surat inner join mahasiswa on isi_surat.nim=mahasiswa.nim inner join jenis_surat on isi_surat.id_jenis=jenis_surat.id_jenis  where isi_surat.nim='$nim' and isi_surat.status_surat='Ditolak' order by id_isi DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }


}
?>
