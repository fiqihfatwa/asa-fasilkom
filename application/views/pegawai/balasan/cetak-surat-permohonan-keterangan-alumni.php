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
                    $nip = '195908161986111003';
                    break;
                default:
                    $kode = 'UN5.2.1.9.2.1';
                    $kaprodi = 'Drs. Rasudyn Ginting, M.Si';
                    $nip = '195908141986011002';
                    break;
            }
            ?>
  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;font-size:12pt">

            <u><h3>SURAT KETERANGAN ALUMNI
                </h3><center></u> <div style="margin-top:-20px">Nomor:&emsp;&emsp;/<?php echo $kode?>/LLS/<?php echo $tahuns?></div>      </center>
            <br><br>




            <p>Ketua Program Studi <?php echo $isi['program_studi'] ?> FISIP USU Medan, dengan ini menerangkan bahwa :</p>

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
            <tr>
                <td>&emsp;&emsp;&emsp;Fakultas</td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td>Ilmu Sosial dan Ilmu Politik</td>
            </tr>


            </table>

            <p>Benar telah menyerahkan Skripsi kepada Program Studi, Dosen Pembimbing dan Dosen Penguji untuk melengkapi perpustakaan Program Studi <?php echo $isi['program_studi'] ?>.
 </p>
            <p><b>JUDUL SKRIPSI: </b><br><?php echo $isi['judul'] ?></p>
            <br>
            <p>Demikian surat keterangan ini dikeluarkan guna melengkapi berkas mendaftar wisuda dan untuk mengurus ijazah.</p>
            <br><br><br><br><br>

             <div style="margin-left:55%">

       Medan, <br>
        Ketua Program Studi,<br>

        <br><br><br><br>
          <b><?php echo $kaprodi ?></b><br>
            NIP.<?php echo $nip ?>

        </div>
            <br><br><br><br>


        </div>

	</body>
</html>
<script>window.print();</script>
