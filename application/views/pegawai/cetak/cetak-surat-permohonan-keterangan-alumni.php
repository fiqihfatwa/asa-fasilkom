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
		<title> Cetak Surat Permohonan Keterangan Alumni</title>
        <style>
        th {
            padding:10px;

        }
        table{
            font-size:12pt;
        }
             h3{
                font-size: 14pt;
                text-align: center;
            }

        </style>
	</head>
	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px;margin-top:120px; font-size:12pt">

            <h3>
SURAT PERMOHONAN KETERANGAN ALUMNI
                </h3><br>
            <br>

           Kepada Yth,<br>
            Ketua Program Studi <br>
            <?php echo $isi['program_studi']?><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
	    Universitas Sumatera Utara <br>
            di Medan<br><br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br><br>
            <table>
            <tr>
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;: &emsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp; : &emsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp; : &emsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Fakultas </td>
                <td>&emsp;&emsp; : &emsp;</td>
                <td>Ilmu Sosial dan Ilmu Politik</td>
            </tr>
            </table>

            <p> Dengan ini mengajukan surat penerbitan surat keterangan alumni untuk keperluan pendaftaran wisuda dan pengambilan ijazah/transkrip nilai.</p>
            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu diucapkan terima kasih.</p><br><br><br><br>

             <div style="margin-left:60%">


                <P >Hormat Saya,</P>

                <br><br><br><br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div><br><br><br><br>

            <small>
                <b>Lampiran</b><br>
-	Menyerahkan 1 (satu) set CD Skripsi. (Hardcopy)<br>
-	.Menyerahkan 1 (satu) set Jilid Skripsi. (Hardcopy)<br>
-	Unduh Bukti Penyerahan Skripsi.


            </small>

        </div>

	</body>
</html>
<script>window.print();</script>
