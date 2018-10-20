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
		<title> Cetak Surat Membimbing Skripsi </title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt">

            <h3>SURAT PERMOHONAN PENUGASAN MEMBIMBING SKRIPSI
            </h3><br><br>

             <div align="right">
                 <P  style="padding-right:110px"> Medan, </P></div><br>

            Kepada Yth,<br>
            <b>Ketua Program Studi<br></b>
            Program Studi <?php echo $isi['program_studi'];?><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
	    Universitas Sumatera Utara <br>
            di Medan<br>
            <br><br>
            Dengan perantaraan surat ini saya :<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;: &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;: &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Kelas </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;:&nbsp; </td>
                <td><?php echo $isi['kelas'] ?></td>
            </tr>


            </table>

            <p> Membutuhkan Surat Penugasan Membimbing Skripsi yang ditujukan kepada Bapak/Ibu <?php echo $isi['ditujukan_ke']?> untuk membimbing penulisan skripsi saya dengan:</p>

            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Judul Sementara </td>
                <td>: &nbsp; </td>
                <td><?php echo $isi['judul_skripsi']?> </td>
            </tr>
            </table>

            <p>Demikian surat permohonan ini disampaikan, atas perhatian Bapak/Ibu saya ucapkan terima kasih.


 </p><br><br><br>

             <div style="margin-left:60%">

        <P >Hormat Saya,</P><br><br>

        <br>(<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
          <br>
        </div><br><br><br>
           <small>
               <b>Lampiran yang harus dilengkapi :</b><br>
1. Foto Copy Surat Persetujuan Judul dari Sekretaris Program Studi

                </small>

    </div>
	</body>
</html>
<script>window.print();</script>
