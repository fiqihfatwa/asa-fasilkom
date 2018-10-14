<?php
class Auth_model extends CI_Model
{
  public function checkDataAdmin($group_id,$kon_id)
  {
    $sql="SELECT u.*,a.* from users u, admin a where u.group_id='$group_id' and a.id_admin='$kon_id'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function createDataMahasiswa($dataMahasiswa,$pass)
  {
    $this->db->insert('mahasiswa',$dataMahasiswa);

    $data = $this->checkDataMahasiswa($dataMahasiswa['nim']);

    foreach ($data as $mahasiswa){
      $username = $mahasiswa['nim'];
      $kon_id = $mahasiswa['id_mahasiswa'];
    }

    date_default_timezone_set('Asia/Jakarta');

    $insertDataMahasiswa = array(
      'username' => $username,
      'password' => $pass,
      'kon_id' => $kon_id,
      'group_id' => '3',
      'created_time' => date('Y-m-d H:i:s')
    );

    $this->db->insert('users',$insertDataMahasiswa);
  }

  public function checkDataPegawai($group_id,$kon_id)
  {
    $sql="SELECT u.*,p.* from users u, pegawai p where u.group_id='$group_id' and p.id_pegawai='$kon_id'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function checkDataMahasiswaDanUser($code,$pass)
  {
    $sql="SELECT m.*,u.* from mahasiswa m, users u where u.username='$code' and u.password='$pass' and m.nim='$code'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function checkDataMahasiswa($nim)
  {
    $sql="SELECT * from mahasiswa where nim='$nim'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  public function checkUser($user, $pass){
    $sql="SELECT * FROM users WHERE username LIKE '%$user%' AND password='$pass'";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

}
?>
