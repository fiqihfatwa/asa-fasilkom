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
		<title> Cetak Surat Permohonan Penerbitan Karya Ilmiah</title>
        <style>
        th {
            padding:10px;

        }
        table {
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
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;font-size:12pt">

            <h3>
SURAT PERMOHONAN PENERBITAN<br>
        KARYA ILMIAH MAHASISWA/JURNAL
                </h3><br>
            <br>

            Kepada Yth,<br>
            Ketua Program Studi <br>
            <?php echo $isi['program_studi']?><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan<br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br><br>
            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
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
                <td>&emsp;&emsp;&emsp;Fakultas </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td>Ilmu Sosial dan Ilmu Politik</td>
            </tr>
            </table>

            <p> Dengan ini mengajukan penerbitan surat keterangan selesai <i>online</i> jurnal untuk keperluan pengambilan transkrip/ijazah.</p>
            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu diucapkan terima kasih.</p><br><br><br>

             <div style="margin-left:60%">


                <P >Hormat Saya,</P>
                <br><br>
                <br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div><br><br><br><br><br>

            <small>
                <b>Lampiran</b><br>
Menyerahkan CD berisi Skripsi berformat jurnal pada saat pengambilan surat. (Hardcopy)<br>
Surat Permohonan Jurnal<br>
Cover Acc Jurnal


            </small>

        </div>

	</body>
</html>
<script>window.print();</script>
