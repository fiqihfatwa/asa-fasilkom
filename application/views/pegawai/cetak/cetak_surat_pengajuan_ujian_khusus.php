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
		<title> Cetak Surat Pengajuan Ujian Khusus </title>
        <style>
        th {
            padding:10px;

        }
             .garping{
                border: 1px solid black;
                border-collapse: collapse;


            }

            table {
                font-size:12pt;

            }
            h3{
                font-size:14pt;
                text-align: center;
            }
        </style>
	</head>
	<body style="text-align: justify; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;
                    font-size:12pt">

            <h3> SURAT PERMOHONAN UJIAN KHUSUS </h3><br><br><br>
            Kepada Yth,<br>
            <b>Wakil Dekan I</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan <br><br><br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini:<br><br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'];  ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['departemen'] ?></td>
            </tr>

            </table>


            <p> Dengan ini saya mengajukan permohonan untuk dapat mengikuti pelaksaan ujian khusus agar saya dapat mengikuti ujian komprehensif/skripsi pada semester ini. Adapun mata kuliah yang akan diajukan adalah sebagai berikut :</p>
            <table  class="garping" align="center">
                <tr >
                    <th  class="garping">No.</th>
                    <th class="garping">Matakuliah</th>
                    <th class="garping">Dosen Penguji</th>
                    <th class="garping">Nilai</th>
                </tr>

                    <tr>
                        <td class="garping"><center>1</center></td>
                        <td class="garping">&nbsp;<?php echo $isi['matkul_satu'] ?><br></td>
                        <td class="garping">&nbsp;<?php echo $isi['penguji_satu'] ?></td>
                        <td class="garping">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="garping"><center>2</center></td>
                        <td class="garping">&nbsp;<?php echo $isi['matkul_dua'] ?><br></td>
                        <td class="garping">&nbsp;<?php echo $isi['penguji_dua'] ?></td>
                        <td class="garping">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="garping"><center>3</center></td>
                        <td class="garping">&nbsp;<?php echo $isi['matkul_tiga'] ?><br></td>
                        <td class="garping">&nbsp;<?php echo $isi['penguji_tiga'] ?></td>
                        <td class="garping">&nbsp;</td>
                    </tr>

            </table>
            <p> Demikian surat permohonan ini saya ajukan, atas perhatian Bapak/Ibu saya ucapkan terima kasih. </p><br><br><br><br><br>

              <div style="margin-left:60%">
                Medan, <br>                           Hormat Saya<br>


                <br><br><br>
                <br>
                (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                <br>

        </div>

        </div>

	</body>
</html>
<script>window.print();</script>
