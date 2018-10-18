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
		<title> Cetak Surat Permohonan Magang</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                font-size:12pt;
            }


        </style>
	</head>
	<body style="text-align: justify; font-family: Times New Roman">
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

            Nomor&emsp;:&emsp;&emsp;/<?php echo $kode?>/SSA/<?php echo $tahuns?>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Medan,<br>
            Lamp &emsp; : - <br>
            Hal &emsp;&emsp;: <b>Praktek Internship/Magang</b><br>
<br><br><br>
            Kepada Yth:<br>
            <b>Bapak/Ibu Pimpinan </b><br>
            ..................................................<br>
            ..................................................<br>
            di Tempat

            <br><br>

            <p>Dengan hormat, sehubungan dengan pelaksanaan Magang/Praktek Internship sebagai salah satu matakuliah pada Kurikulum Program Studi <?php echo $isi['program_studi'] ?> FISIP USU dengan ini kami memohon kesediaan Bapak/Ibu untuk dapat  menerima mahasiswa/i berikut untuk Magang/Praktek Internship  di  perusahaan yang Bapak/Ibu pimpin.</p>

            <p>Adapun nama mahasiswa/i tersebut adalah sebagai berikut: </p>
            <table  align='center'>
             <tr align="center">
                <td>&emsp;No&emsp; </td>
                <td>&emsp;&emsp;&emsp;&emsp;&emsp;Nama&emsp;&emsp;&emsp;&emsp;&emsp; </td>
                <td>&emsp;&emsp;&emsp;NIM&emsp;&emsp;&emsp; </td>

            </tr>
            <tr>

                <td  align='center'>1</td>
                <td>&nbsp;<?php echo $isi['nama'] ?></td>
                <td>&nbsp;<?php echo $isi['nim'] ?></td>
            </tr>
           <?php /*?>
            <tr>

                <td>2</td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td>3</td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td>4</td>
                <td></td>
                <td></td>
            </tr>
           <tr>

                <td>5</td>
               <td></td>
                <td></td>
            </tr>
            <?php */?>
            </table>

            <p> Demikian hal ini kami sampaikan, atas perhatian dan kerjasama yang Bapak/Ibu berikan, kami ucapkan terimakasih.
 </p><br><br><br><br><br>

             <div style="margin-left:60%">

                 Ketua,
        <br><br><br><br><p></p>
                 <b><?php echo $kaprodi ?></b><br>
            NIP.<?php echo $nip ?>
                <br>

        </div>



        </div>

	</body>
</html>
<script>window.print();</script>