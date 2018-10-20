<?php
class Admin_model extends CI_Model
{
  public function get_log_pegawai()
  {
    $sql="SELECT * from log_pegawai order by tanggal DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function get_data_pegawai()
  {
    $sql="SELECT u.*,p.* from users u,pegawai p where u.group_id='2' and u.kon_id = p.id_pegawai";
    $query = $this->db->query($sql);
    return $query->result();
  }
}
 ?>
