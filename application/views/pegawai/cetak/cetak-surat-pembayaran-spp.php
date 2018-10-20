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
		<title> Cetak Surat Keterlambatan SPP</title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt">

            <h3>SURAT PERMOHONAN KETERLAMBATAN <br> PEMBAYARAN SPP</h3><br>

             <div align="right">
                 <P  style="padding-right:110px"> Medan, </P></div><br>

            Kepada Yth,<br>
            <b>Ketua Program Studi <?php echo $isi['program_studi']?></b><br>
            FISIP USU <br>
            di Medan <br>
            <br><br>
            Dengan hormat, <br>Sehubungan dengan surat ini, saya yang bertanda tangan dibawah ini:<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>


            </table>

            <p> Dengan ini menyampaikan permohonan maaf saya atas keterlambatan pembayaran uang SPP Semester <?php echo $isi['semester'] ?> Tahun Akademik <?php echo $isi['tahun_akademik']?>  yang dikarenakan <?php echo $isi['alasan'] ?> dan saya berjanji tidak akan mengulangi kesalahan ini di semester selanjutnya. Melalui surat ini, agar sekiranya Bapak/Ibu dapat mengizinkan saya untuk melalukan pembayaran uang kuliah saya.</p>

            <p> Demikian surat permohonan ini saya sampaikan, atas perhatiannya saya ucapkan terima kasih.

 </p><br><br>

             <div style="margin-left:60%">

        <P>Hormat Saya,</P><br>
        <small style="border:2px solid; padding:8px; font-size:10pt; margin-right:100px">Materai 6000</small><br><br>
       (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
          <br>
        </div><br><br><br>
           <small>
               <i><b>Syarat Yang Harus Dilampirkan :</b></i><br>
1. Foto Copy KTM 1 lembar<br>
2. Foto Copy SPP terakhir 1 lembar.

            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
