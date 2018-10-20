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
		<title> Cetak Surat PKA</title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt">

            <h3>SURAT PERMOHONAN <br> PENUNDAAN KEGIATAN AKADEMIK (PKA)

            </h3><br><br><br><br>
            Kepada Yth,<br>
            <b>Wakil Dekan I</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan
            <br><br><br>

            Dengan hormat, <br>Saya yang bertanda tangan dibawah ini:<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Jenjang</td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['jenjang'] ?></td>
            </tr>

            </table>

            <br>Dengan ini saya mengajukan Penundaan Kegiatan Akademik (PKA), yaitu:<br>
             <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Semester</td>
                <td>&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['semester']?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Tahun Akademik</td>
                <td>&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['tahun_akademik']?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;&emsp;Alasan PKA</td>
                <td>&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['alasan']?></td>
            </tr>


            </table><br>
            <p> Demikian surat permohonan ini saya buat, atas perhatian dan bantuan Bapak/Ibu saya ucapkan terima kasih.

 </p><br><br>

             <div style="margin-left:60%">


        <P >Hormat Saya,</P>
        <br><br>

        <br>(<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
          <br>
        </div>

        </div>

	</body>
</html>
<script>window.print();</script>
