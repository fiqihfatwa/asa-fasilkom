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
		<title> Cetak Surat Permohonan Undangan Sempro untuk Dosen Penguji</title>
        <style>
            th{
               padding: 10px;
            }
        table {
            font-size: 12pt;
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
		<div style="margin-left:80px;margin-right:80px; margin-top:150px; font-size:12pt">

            Nomor&emsp;:&emsp;&emsp;/<?php echo $kode?>/KRK/<?php echo $tahuns?>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Medan,<br>
            Lamp &emsp;: - <br>
            Hal &emsp;&emsp;: <b>Pembayaran SPP</b>
<br>
<br><br><br>
            Yth: <?php echo $isi['nama'] ?> (NIM: <?php echo $isi['nim'] ?>)<br>
            Program Studi...........................<br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            di Medan
            <br><br>
            <p>Membalas surat Saudara perihal Permohonan Pembayaran SPP"Semester <?php echo $isi['semester'] ?> T.A. <?php echo $isi['tahun_akademik'] ?> yang terlambat karena masalah ekonomi, maka dengan ini kami memberikan batas akhir waktu pembayaran SPP kepada Saudara sampai tanggal   ............................. </p>



            <p>Demikian disampaikan, atas kerjasamanya diucapkan terima kasih.
 </p><br><br><br><br><br><br><br>

             <div style="margin-left:47%">
         Medan, <br>
       A.n Dekan<br>
       Wakil Dekan II
        <br><br><br><br><p></p>
           <b>Muhammad Arifin Nasution, S.Sos, MSP</b><br>
            NIP.197910052005011002
                <br>
        </div>



        </div>

	</body>
</html>
<script>window.print();</script>
