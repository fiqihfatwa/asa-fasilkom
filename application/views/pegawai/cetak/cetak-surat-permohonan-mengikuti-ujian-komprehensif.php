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
		<title> Cetak Surat Permohonan Mengikuti Ujian Komprehensif</title>
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
	<body style="text-align: justify; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:80px; font-size:12pt">

            <h3>SURAT PERMOHONAN BERHAK MENGIKUTI UJIAN <br>
                SKRIPSI/KOMPREHENSIF/TUGAS AKHIR</h3><br>
            <br><br>

            Kepada Yth,<br>
            Kepala Sub Bagian Akademik  <br>
            <?php echo $isi['program_studi']?><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan<br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br><br>
            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td> <?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td> &emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td> <?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td> <?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Fakultas </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td> Ilmu Sosial dan Ilmu Politik</td>
            </tr>
            </table>

            <p> Dengan ini mengajukan permohonan berhak mengikuti ujian Skripsi/Komprehensif/Tugas Akhir. </p>

            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu diucapkan terima kasih.</p><br><br>


             <div style="margin-left:60%">


                <P >Hormat Saya,</P>

                <br><br><br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div><br><br><br><br><br>
           <small><i>
        <div> <b>Lampiran</b> <br>
            Scan Bukti Lunas SPP dari Semester Awal sampai akhir per tahun akademik <br>
            Scan Bukti Lunas Uang Skripsi/Tugas Akhir. <br>
            Scan Bukti Telah Menyelesaikan Urusan Tagihan dari Perpustakaan USU dan FISIP USU. <br>
           Scan KHS dari Semester Awal sampai Akhir.<br>
           Menyerahkan pas photo hitam putih ukuran 4x6, 3x4, dan 2x3 sebanyak 3 lembar pada saat pengambilan surat. <br>


        </div> </i>
       </small>
        </div>

	</body>
</html>
<script>window.print();</script>
