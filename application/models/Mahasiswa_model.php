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
}
?>
