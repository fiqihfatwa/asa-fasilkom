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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; font-size:12pt; margin-top:120px;">

            <H3>SURAT PERMOHONAN <br> KETERANGAN AKTIF KULIAH MAHASISWA</h3><br><br><br>


            Kepada Yth <br>
            <b>Dekan</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            di Medan<br>
            <br>

            Dengan hormat, Saya yang bertanda tangan dibawah ini:<br>
            <table>
            <tr style="margin-top:-20px">
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
                <td>&emsp;&emsp;Semester</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['semester'] ?></td>
            </tr>
           <tr>
                <td>&emsp;&emsp;Tempat/Tgl Lahir</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nomor_tel'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;No Telepon</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['ttl'] ?></td>
            </tr>

            </table>

            <p>Dengan ini saya mengajukan permohonan kepada Bapak/Ibu agar dapat mengeluarkan Surat Keterangan Aktif Kuliah Untuk Keperluan <?php echo $isi['keperluan']?>.</p>

            <p> Demikian surat Permohonan ini saya ajukan, atas perhatian Bapak/Ibu diucapkan terima kasih.


 </p><br><br><br>

           <div style="margin-left:60%">

        <P >Pemohon,</P><br>
        <small style="border:2px solid; padding:8px; font-size:10pt; margin-right:100px">Materai 6000</small><br><br>
        (<?php echo $isi['nama'] ?>)<br>NIM: <?php echo $isi['nim'] ?>
        <br>
        </div><br><br><br><br>
           <small>
               <i><b>Syarat Yang Harus Dilampirkan :</b></i><br>
1. Foto Copy KTM, KRS, KHS, dan SPP terakhir masing-masing 1 (satu) lembar. <br>
2. Materai Rp.6.000.

            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
