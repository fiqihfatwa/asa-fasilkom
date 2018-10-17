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
	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">
        <?php
            $date = date("Y-m-d");
            $t = explode("-",$date);
            $tahuns = $t[0];
            $kode = $isi['program_studi'];
            $kaprodi = " ";
            $nip = " ";

            switch($kode)
            {
                case 'Ilmu Komunikasi':
                    $kode = 'UN5.2.1.9.1.3';
                    $kaprodi = 'Dra. Dewi Kurniawati, M.Si., Ph.D';
                    $nip = '196505241989032001';
                    break;
                case 'Sosiologi':
                    $kode = 'UN5.2.1.9.1.4';
                    $kaprodi = 'Dr. Harmona Daulay,S.Sos. M.Si';
                    $nip = '196907111994032002';
                    break;
                case 'Ilmu Politik':
                    $kode = 'UN5.2.1.9.1.6';
                    $kaprodi = 'Warjio, MA, Ph.D';
                    $nip = '197408062006041003';
                    break;
                case 'Ilmu Administrasi Publik':
                    $kode = 'UN5.2.1.9.1.1';
                    $kaprodi = 'Dr. Tunggul Sihombing, MA';
                    $nip = '196203011986031027';
                    break;
                case 'Antropologi Sosial':
                    $kode = 'UN5.2.1.9.1.5';
                    $kaprodi = 'Dr. Fikarwin, M.Ant';
                    $nip = '196212201989031005';
                    break;
                case 'Ilmu Kesejahteraan Sosial':
                    $kode = 'UN5.2.1.9.1.3';
                    $kaprodi = 'Agus Suriadi, S.Sos, M.Si';
                    $nip = '196708081994031004';
                    break;
                case 'Ilmu Administrasi Bisnis':
                    $kode = 'UN5.2.1.9.1.7';
                    $kaprodi = 'Prof. Dr. Marlon Sihombing, MA';
                    $nip = '195908161986111001';
                    break;
                default:
                    $kode = 'UN5.2.1.9.2.1';
                    $kaprodi = 'Drs. Rasudyn Ginting, M.Si';
                    $nip = '195908141986011002';
                    break;
            }
            ?>
  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:150px; font-size:12pt">

            Nomor&emsp;:&emsp;&emsp;/<?php echo $kode?>/KRK/<?php echo $tahuns?>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Medan, <br>
            Lamp &emsp; : 1 (satu) eks <br>
            Hal &emsp;&emsp; : Undangan Seminar Proposal Dosen Penguji<br>
		  &emsp;&emsp;&emsp;&emsp;&nbsp;Skripsi/Tugas Akhir Program Studi <?php echo $isi['program_studi'] ?>
<br>
<br><br><br>
            Yth:<br>
            Bapak/Ibu ..............................<br>
            <b>Penguji/Pembimbing Seminar Proposal/Seminar Hasil Penelitian </b><br>
            Program Studi.................<br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
	       Universitas Sumatera Utara<br>
            di Medan<br>
            <br>

            <p>Dengan hormat, dengan ini kami mengundang Bapak/Ibu untuk menghadiri Seminar Proposal Skripsi  mahasiswa Program Studi <?php echo $isi['program_studi'] ?> (jadwal terlampir), yang akan dilaksanakan pada:</p>

            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp; Hari/Tanggal </td>
                <td>&emsp;&emsp;&emsp; :&nbsp; </td>
                <td>............................................... </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; Jam </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td>............................................... </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; Tempat </td>
                <td>&emsp;&emsp;&emsp; :&nbsp; </td>
                <td>............................................... </td>
            </tr>


            </table>

            <p> Demikian  undangan  ini kami sampaikan, atas perhatian dan kehadirannya diucapkan terima kasih.
 </p><br><br><br>

             <div style="margin-left:55%">

        <p>Ketua,</p>
        <br><br><br><br>
 <b><?php echo $kaprodi ?></b><br>
            NIP.<?php echo $nip ?>
                <br>

        </div>



        </div>

	</body>
</html>
<script>window.print();</script>
