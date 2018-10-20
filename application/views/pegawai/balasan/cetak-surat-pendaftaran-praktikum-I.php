<?php
	// include "../../../config/session.php";
	//
  //   $id = $_GET['id'];
	//
	//
  //               $id = $_GET['id'];
  //               $sql = $koneksi->query("SELECT * FROM detail_surat join surat on surat.id_surat=detail_surat.id_surat WHERE id_isi='$id'");
  //               while($data = $sql->fetch_array()){
  //                   $isi[$data['name']] = $data['keterangan'];
  //               }
	foreach ($detail_surat as $data) {
		$isi[$data['name']] = $data['keterangan'];
	}
?>
<html>
	<head>
		<title> Cetak Surat </title>
         <style>         th {             padding:10px;          }                           table{         font-size: 12px;         }        h3{
             font-size: 14px; text-align: center;
             }          </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">

		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12px">

            <h3>Blanko Pengisian untuk Pendaftaran Praktikum</h3><br><br><br><br>

             Kepada Yth : <br>
            <?php echo $isi['ditujukan_ke'] ?><br>
            <?php echo $isi['jabatan_tertuju']?><br>
            di-tempat
            <br><br><br><br><br>
            <table>
            Nama Mahasiswa/Nim : <br>
            1. <?php echo $isi['mahasiswa_satu']?><br>
            2. <?php echo $isi['mahasiswa_dua']?> <br>
            3. <?php echo $isi['mahasiswa_tiga']?>
            <br>
            Nomor Hp : <?php echo $isi['nomor_hp'] ?>
            <br>
            Setting Praktikum : <?php echo $isi['setting_praktikum']?>
            </table>
        </div>
	</body>
</html>
<script>window.print();</script>
