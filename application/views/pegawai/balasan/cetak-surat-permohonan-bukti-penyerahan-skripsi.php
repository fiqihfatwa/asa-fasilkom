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
		<title> Cetak Surat Balasan Bukti Penyerahan Skripsi</title>
        <style>
            th{
               padding: 10px;
            }

           table{
            font-size: 12pt;
           }
             h3{
                font-size: 14pt;
                text-align: center;
            }

        </style>
	</head>
	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">
        <?php
            $date = date("Y-m-d");
            $t = explode("-",$date);
            $tahuns = $t[0];
            $kode = $isi['program_studi'];

            switch($kode)
            {
                case 'Ilmu Komunikasi':
                    $kode = 'UN5.2.1.9.1.3';
                    break;
                case 'Sosiologi':
                    $kode = 'UN5.2.1.9.1.4';
                    break;
                case 'Ilmu Politik':
                    $kode = 'UN5.2.1.9.1.6';
                    break;
                case 'Ilmu Administrasi Publik':
                    $kode = 'UN5.2.1.9.1.1';
                    break;
                case 'Antropologi Sosial':
                    $kode = 'UN5.2.1.9.1.5';
                    break;
                case 'Ilmu Kesejahteraan Sosial':
                    $kode = 'UN5.2.1.9.1.3';
                    break;
                case 'Ilmu Administrasi Bisnis':
                    $kode = 'UN5.2.1.9.1.7';
                    break;
                default:
                    $kode = 'UN5.2.1.9.2.1';
                    break;
            }
            ?>
  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:140px;font-size:12pt">

            <h3>SURAT BUKTI PENYERAHAN SKRIPSI</h3>
            <br>

            Saya yang bertanda tangan di bawah ini, selaku dosen pembimbing/dosen penguji menerangkan bahwa:<br>


            <table>
            <tr>
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
                <td> <?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
                <td> <?php echo $isi['nim'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Program Studi</td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
           <tr>
                <td>&emsp;&emsp;Alamat</td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
                <td><?php echo $isi['alamat'] ?></td>
            </tr>


            </table>

            Benar telah menyerahkan 1 (satu) eksemplar Skripsi/CD dengan judul:<br> <b><i><?php echo $isi['judul'] ?></i></b>
 <br>
            <table>
            <tr>
                <td>&emsp;&emsp;1. Ketua Penguji</td>
                <td>&emsp;:</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;2. Penguji I </td>
                <td>&emsp;:</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;3. Penguji II </td>
                <td>&emsp;:</td>
                <td> </td>
            </tr>



            </table>

            <p>Hari/Tanggal Ujian Komprehensif/<br>Skripsi/Tugas Akhir &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:
            ..................................................</p>

            <p>Demikian surat keterangan ini dibuat untuk dapat dipergunakan seperlunya.</p>
            <br><br>


            <center>
            <div style="text-align:center">
                 RUANG BACA FISIP USU,

                <br><br><br><br><br>
            (...........................................)<br>
                <div style="margin-left: -90px">NIP.</div>

            </div></center>

             <div style="margin-left:80%; ">



       Medan, <br>
        Dosen Penguji I,

        <br><br><br><br><br>
            (............................................)<br>
            NIP.

        </div>

            <div style="margin-top: -102px">
                 Dosen Penguji II,

                <br><br><br><br><br>
            (............................................)<br>
                NIP.

            </div>


            <div style="text-align:center">
                 Ketua Penguji,

                <br><br><br><br><br>
            (............................................)<br>
                <div style="margin-left: -90px">NIP.</div>

            </div>


        </div>

	</body>
</html>
<script>window.print();</script>
