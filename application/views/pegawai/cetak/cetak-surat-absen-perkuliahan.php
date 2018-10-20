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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }
        th {
            padding:10px;

        }
        </style>
	</head>
	<body style="text-align: justify; font-size:12pt;" >

  <br><br>
		<div style="margin-left:80px;margin-right:80px; font-size:12pt; margin-top:80px;">

            <h3>SURAT IZIN TIDAK MENGIKUTI PERKULIAHAN</h3><br><br><br>

             <div align="right">
                 <P  style="padding-right:110px"> Medan, </P></div><br>

            Kepada Yth,<br>
            Wakil Dekan I<br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            Di Tempat <br>
            <br>
            <br><br>

            Dengan hormat, <br>Melalui surat ini, Saya yang bertanda tangan dibawah ini:<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?>  </td>
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
                <td>Fakultas Ilmu Sosial dan Ilmu Politik</td>
            </tr>


            </table>

            <p>Mengajukan izin dan permohonan maaf tidak dapat mengikuti Perkuliahan/Ujian Tengah Semester/Ujian Akhir Semester dikarenakan <?php echo $isi['alasan']?></p>

            <p> Demikian surat izin ini saya buat agar dimaklumi, atas izin yang diberikan diucapkan terima kasih.
 </p><br><br>

             <div style="margin-left:60%">

        <P >Hormat Saya</P><br>
        <small style="border:2px solid; padding:8px; font-size:10pt; margin-right:100px">Materai 6000</small><br>
        <br >(<?php echo $isi['nama'] ?>)<br>NIM: <?php echo $isi['nim'] ?>
        <br>
        </div><br><br><br>
           <small>
               <i><b>Syarat Yang Harus Dilampirkan :</b></i><br>
               Foto Copy Ijazah 1 lembar
            </small>
        </div>

	</body>
</html>

<script>window.print();</script>
