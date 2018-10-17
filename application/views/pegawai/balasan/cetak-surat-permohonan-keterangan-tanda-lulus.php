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
		<title> Cetak Surat Permohonan Keterangan Alumni</title>
        <style>
            th{
               padding: 10px;
            }

           table{
                font-size:12px;
           }
             h3{
                font-size: 14px;
                text-align: center;
            }

        </style>
	</head>
	<body style="text-align: justify; font-family: Times New Roman">
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
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12px">

            <h3>SURAT KETERANGAN TANDA LULUS</h3>
               <center style="margin-top:-10px">  Nomor :&emsp;&emsp;/<?php echo $kode?>/LLS/<?php echo $tahuns?>      </center>
            <br><br><br><br>




            <p>Dekan Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara di Medan, menerangkan bahwa :</p>

            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nim'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi</td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>

            </table>

            <p>Benar yang bersangkutan telah menempuh ujian skripsi/komprehensif/tugas akhir pada tanggal ... .......... ...... dan dinyatakan <b>LULUS</b> dengan Indeks Prestasi Kumulatif : ..................
 </p>
            <p>Predikat kelulusan : ............................................</p>
            <br>
            <p>Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan, sementara menunggu proses penyelesaian ijazah, atas perhatiannya diucapkan terima kasih.</p>
            <br><br><br>

             <div style="margin-left:65%">

        Medan, <br>
        a.n Dekan<br>
                 Wakil Dekan I<br>

        <br><br><br><br><p></p>
                 Husni Thamrin, S.Sos, MSP<br>
            NIP 197203082005011001

        </div>
            <br><br><br><br>


        </div>

	</body>
</html>
<script>window.print();</script>
