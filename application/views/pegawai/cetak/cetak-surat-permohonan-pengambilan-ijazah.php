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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:80px;font-size:12pt">

            <h3>SURAT PERMOHONAN PENGAMBILAN IJAZAH/<br>TRANSKRIP NILAI</h3><br><br>


            Kepada Yth,<br>
            Wakil Dekan I <br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan <br>
           <br>
            Dengan hormat, Saya yang bertanda tangan dibawah ini :<br><br>
            <table>
            <tr>
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Fakultas </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td>Ilmu Sosial dan Ilmu Politik</td>
            </tr>
            </table>

            <p> Dengan ini mengajukan penerbitan ijazah untuk keperluan melamar pekerjaan, melanjutkan pendidikan, dan keperluan lainnya. </p>
            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu saya ucapkan terima kasih.


 </p><br><br><br><br>

           <div style="margin-left:60%">

        <P >Hormat Saya,</P><br><br><br>
        <br >(<?php echo $isi['nama'] ?>)<br>NIM: <?php echo $isi['nim'] ?>
        <br>
        </div><br><br><br><br><br><br><br>

           <small>
               <i><b>Syarat Yang Harus Dilampirkan :</b></i><br>
1. Surat Keterangan Alumni<br>
2. Surat Keterangan Penerbitan Karya Ilmiah/Jurnal<br>
3. Surat Pengembalian Toga Wisuda
            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
