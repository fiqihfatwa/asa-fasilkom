<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->model('Auth_model','dbObject');
	}

	// private function set_pass($pass){
	// for($i=0;$i<73;$i++){
	// 	$pass = md5($pass);
	// 	$pass = base64_encode($pass);
	// 	$pass = md5($pass);
	// 	}
	// 	$hased_pass = password_hash($pass, PASSWORD_BCRYPT);
	// 	return $hased_pass;
	// }

	private function cek_pass($pass,$pass2){
		for($i=0;$i<73;$i++){
			$pass = md5($pass);
			$pass = base64_encode($pass);
			$pass = md5($pass);
		}
		$hased_pass = password_verify($pass, $pass2);
		if($hased_pass == $pass)
			return 1;
		else
			return 0;
	}


	public function login()
	{
		$data['title']='Login';
		$this->load->view('login',$data);
	}

	public function prosesLogin()
	{

			$code = $_POST['nim'];
			$pass = $_POST['password'];
			$passcrypt = md5($_POST['password']);


			//$adm = mysqli_query($koneksi,"select * from data_admin where username='$code' and password='$passcrypt'") or die(mysqli_error($koneksi));
			$rows = $this->dbObject->checkUser($code,$passcrypt);
			//var_dump($rows);die;
			foreach($rows as $row){
				$group_id=$row['group_id'];
				$kon_id =$row['kon_id'];
			}


			//var_dump($rows);die;
			if($rows)
			{
				//foreach ($rows as $row) {
				//$data = mysqli_fetch_array($adm);
					// $_SESSION['login_token']=$code;
					// $_SESSION['akses'] = 'admin';
					if($group_id=='1'){
						$rows1=$this->dbObject->checkDataAdmin($group_id,$kon_id);
						foreach ($rows1 as $row) {
						$admin = array(
							//'login_token' => $code,
							'group_id'=> $row['group_id'],
							'nama' => $row['nama_admin'],
							'kon_id' => $row['kon_id'],
							'loggedIn' => TRUE
						);
					}
						$this->session->set_userdata($admin);
						//header('location:../pages/admin/admin_logpegawai.php');die;
						redirect('admin/dashboard');
					}

					if($group_id=='2'){
					$rows2=$this->dbObject->checkDataPegawai($group_id,$kon_id);

					foreach ($rows2 as $row){
						$pegawai = array(
							'group_id'=> $row['group_id'],
							'nama' => $row['username'],
							'kon_id' => $row['kon_id'],
							'bagian' => $row['bagian'],
							'loggedIn' => TRUE
						);
					}
						$this->session->set_userdata($pegawai);
						//header('location:../pages/tu/tu-beranda.php');
						redirect('pegawai/dashboard');
					}
			//}
		//}
				//}
			//}
			//$rows3 = $this->dbObject->checkDataMahasiswaDanUser($code);
			//if($rows3)
				//{
					//foreach ($rows3 as $dataMahasiswa){
					//if($this->cek_pass($pass, $dataMahasiswa['password'])){
							//'login_token' => $code,
					if($group_id=='3'){
							$rows3 = $this->dbObject->checkDataMahasiswaDanUser($code,$passcrypt);
							//var_dump($rows3);die;
							foreach ($rows3 as $row){
							$mahasiswa = array(
							'nama'=> $row['nama_depan']." ".$row['nama_belakang'],
							'group_id' => $row['group_id'],
							'nim' => $row['nim'],
							'email' => $row['email'],
							'kon_id' => $row['kon_id'],
							'link_foto' => $row['link_foto'],
							'loggedIn' => TRUE
							);
						}

						$this->session->set_userdata($mahasiswa);
						redirect('mahasiswa/dashboard');
					}
						//header('location:../pages/mahasiswa/mahasiswa.php');die ;
					//}
				//}
			//}
		}else{
				/////////////////////////////////////////////////////////////////////////////////////////////////
				 $curl = curl_init();
		         $url["login"] = "https://portal.usu.ac.id/login/proses_login.php";
		       	 $url["profil"] = "https://portal.usu.ac.id/profil/tampil.php";
		         $url["email"] = "https://portal.usu.ac.id/email/ubah.php";
		                    $cookie = "../assets/cookie.txt";

		                    $data1 = [
		                      'username' => $code,
		                      'password' => $pass
		                    ];

		                    $data1 = http_build_query($data1);

		                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data1);
		                    curl_setopt($curl, CURLOPT_URL, $url["login"] );
		                    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		                    curl_setopt($curl, CURLOPT_POST, 1);
		                    curl_setopt($curl, CURLOPT_COOKIEJAR, realpath($cookie));

		                    $html = curl_exec($curl);
		                    $pattern = '/<div.+?id="member-info">.+<h3>([\S\s]+)<\/h3>.+<h4>([\d]+)<\/h4>.+<h4>([\S\s]+)<\/h4>.+/s';
		                    preg_match($pattern, $html, $login);


		                    if(count($login)<=0){
								//die($koneksi->error);
								echo"<script>alert('Username atau Password Anda salah!');window.location='javascript:history.go(-1)';</script>";die;
		                    }

		                    curl_setopt($curl, CURLOPT_URL, $url['profil']);
						    $html = curl_exec($curl);
						    preg_match_all('/\<td>.?(.+)?<\/td>/', $html, $profil);


						    curl_setopt($curl, CURLOPT_URL, $url['email']);
						    $html = curl_exec($curl);
						    preg_match_all('/<strong.+?id="myemail">(.+)<\/strong>/', $html, $email);

						    $login[0] = $login[1];
						    $login[1] = $login[2];
						     $login[2] = $login[3];

						     $profil = $profil[1];
						     $ttl = explode(", ", $profil[2]);
						     $nama = explode(' ', $login[0]);
						      for($i=1;$i<count($nama);$i++)
						      	@$nama_belakang .= ' '.$nama[$i];

						      $bln["Januari"] = 1;
						      $bln["Februari"] =2;
						      $bln["Maret"] = 3;
						      $bln["April"] = 4;
						      $bln["Mei"] = 5;
						      $bln["Juni"] = 6;
						      $bln["Juli"] = 7;
						      $bln["Agustus"] = 8;
						      $bln["September"] = 9;
						      $bln["Oktober"] = 10;
						      $bln["November"] = 11;
						      $bln["Desember"] = 12;

						      $date = explode(" ", $ttl[1]);
						      $tgl_lahir = $date[2].'-'.$bln[$date[1]].'-'.$date[0];
						      $email = $email[1][0];
						     /*
		                    $mahasiswa = array(
		                    	'mahasiswa_nim' => $login[1],
		                    	'mahasiswa_nama_depan' => $nama[0],
		                    	'mahasiswa_nama_belakang' => $nama_belakang,
		                    	'mahasiswa_email' => $email[1][0],
		                    	'mahasiswa_tempat' => $ttl[0],
		                    	'mahasiswa_tanggal' => $tgl_lahir,
		                    	'mahasiswa_password' => $pass,
		                    	'mahaiswa_prodi' => $login[2]
		                    );
							*/
												//$hased_pass = $this->set_pass($pass);

												$dataMahasiswa = array(
													'nama_depan' => $nama[0],
													'nama_belakang' => $nama_belakang,
													'nim' => $login[1],
													'email' => $email,
													'tempat_lahir' => $ttl[0],
													'tanggal_lahir' => $tgl_lahir,
													'program_studi' => $login[2],
													'link_foto' => 'https://portal.usu.ac.id/photos/'.$login[1].'.jpg'
												);

											//$pass = $hased_pass;
											$insertDataMahasiswa = $this->dbObject->createDataMahasiswa($dataMahasiswa,$passcrypt);
											$rows4 = $this->dbObject->checkDataMahasiswaDanUser($code,$passcrypt);
											//var_dump($rows4);die;
												foreach ($rows4 as $row){
													$mahasiswa = array(
														//'login_token' => $code,
														'nama'=> $row['nama_depan']." ".$row['nama_belakang'],
														'group_id' => $row['group_id'],
														'nim' => $row['nim'],
														'email' => $row['email'],
														'kon_id' => $row['kon_id'],
														'link_foto' => $row['link_foto'],
														'loggedIn' => TRUE,
													);
													//header('location:../pages/mahasiswa/mahasiswa.php');die ;
											$this->session->set_userdata($mahasiswa);
										}
			}
			redirect('mahasiswa/dashboard');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
