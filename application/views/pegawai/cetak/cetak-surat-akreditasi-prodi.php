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
         <style>
        th {
            padding:10px;

        }h3{font-size:14pt; text-align:center;

        </style>
	</head>
	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt">

            <h3>SURAT PERMOHONAN <br> AKREDITASI PROGRAM STUDI</h3><br><br>

             <div align="right">
                 <P  style="padding-right:110px"> Medan, </P></div><br>

            Kepada Yth,<br>
            <b>Wakil Dekan I</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            Di Tempat <br>
            <br>
            <table>
		<tr style="vertical-align:top">
			<td><b>Perihal:</b></td>
			<td><b>Permohonan Surat Akreditasi Program Studi <br> <?php echo $isi['program_studi']?></b></td>
		</tr>

	    </table>

<br><br>


            Dengan hormat, Saya yang bertanda tangan dibawah ini:<br>
            <table style="font-size:12pt;">
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
                <td>&emsp;&emsp;Nomor Ijazah </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nomor_ijazah'] ?></td>
            </tr>


            </table>

            <p> Dengan ini memohon diberikan Keterangan Akreditasi Program Studi <?php echo $isi['program_studi']?> Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara sebagai salah satu prasyarat dan kelengkapan untuk melamar pekerjaan. Mengingat pentingnya prasyarat tersebut, saya mohon agar fakultas dapat memfasilitasi permohonan saya.</p>

            <p> Demikian permohonan ini saya buat dengan sebenar-benarnya, atas perhatiannya diucapkan terima kasih.
 </p><br>

             <div style="margin-left:60%">

        <P>Pemohon,</P><br>
        <small style="border:2px solid; padding:8px; font-size:10pt; margin-right:100px">Materai 6000</small><br>
        <br >(<?php echo $isi['nama'] ?>)<br>NIM: <?php echo $isi['nim'] ?>
        <br>
        </div><br><br>
           <small>
               <i><b>Syarat Yang Harus Dilampirkan :</b></i><br> Foto Copy Ijazah 1 lembar
            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
