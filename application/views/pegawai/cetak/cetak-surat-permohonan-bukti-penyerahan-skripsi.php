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
		<title> Cetak Surat Permohonan Bukti Penyerahan Skripsi</title>
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
		<div style="margin-left:80px;margin-right:80px; margin-top:80px;font-size:12pt">

            <h3>SURAT PERMOHONAN BUKTI PENYERAHAN SKRIPSI</h3><br>
            <br>


            Kepada Yth,<br>
            Ketua Program Studi <br>
            <?php echo $isi['program_studi']?><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan<br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br><br>
            <table style="margin-left: 20px">
            <tr>
                <td>Nama </td>
                <td>: </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>NIM </td>
                <td>: </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>Program Studi </td>
                <td>: </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>Fakultas </td>
                <td>: </td>
                <td>Ilmu Sosial dan Ilmu Politik</td>
            </tr>
                <tr>
                <td>Desen Pembimbing </td>
                <td>: </td>
                <td><?php echo $isi['dopim'] ?></td>
            </tr>
             <tr>
                <td>Dosen Penguji I</td>
                <td>: </td>
                <td><?php echo $isi['dopeng1'] ?></td>
            </tr>
             <tr>
                <td>Dosen Penguji II</td>
                <td>: </td>
                <td><?php echo $isi['dopeng2'] ?></td>
            </tr>
             <tr>
                <td>Ketua Penguji </td>
                <td>: </td>
                <td><?php echo $isi['ketuji'] ?></td>
            </tr>
             <tr>
                <td>Hari, Tanggal/Tahun Sidang </td>
                <td>: </td>
                <td><?php echo $isi['waktu'] ?></td>
            </tr>
             <tr>
                <td>Lokasi Penelitian Skripsi </td>
                <td>: </td>
                <td><?php echo $isi['lokasi'] ?></td>
            </tr>
            </table>
            <br>

            <p> Dengan ini mengajukan permohonan bukti penyerahan skripsi untuk keperluan pengambilan surat keterangan alumni. </p>
            <p> Demikian surat permohonan ini saya sampaikan, atas perhatian Bapak/Ibu diucapkan terima kasih.</p><br><br><br>

             <div style="margin-left:60%">


                <P >Hormat Saya,</P>
                <br><br>
                <br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div><br><br><br><br>

        </div>

	</body>
</html>
<script>window.print();</script>
