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
		<title> Cetak Surat Permohonan Undangan Meja Hijau</title>
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
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt">

            <h3>SURAT PERMOHONAN UNDANGAN UJIAN MEJA
                HIJAU/KOMPREHENSIF/TUGAS AKHIR</h3><br>
            <br><br>

            Kepada Yth,<br>
            Ketua Program Studi <br>
            <?php echo $isi['program_studi']?><br>
            FISIP USU <br>
            di Medan<br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br>
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

            <p> Dengan ini mengajukan permohonan penentuan jadwal sidang meja hijau dan ujian meja hijau/komprehensif. </p>

            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu diucapkan terima kasih.</p><br>


             <div style="margin-left:60%">

                <P >Hormat Saya,</P>

                <br><br><br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div><br><br><br><br><br><br>
           <small><i>
        <div> <b>Lampiran</b> <br>
            Scan Cover skripsi yang telah ditanda tangani oleh dosen pembimbing.</a><br>
            Scan Cover halaman persetujuan yang telah ditanda tangani oleh dosen pembimbing dan ketua program studi.</a><br>


        </div> </i>
       </small>
        </div>

	</body>
</html>
<script>window.print();</script>
