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
		<title> Cetak Surat </title>
         <style>
        th {
            padding:10px;

        }h3{font-size:14pt; text-align:center;
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
                    //$kode = 'UN5.2.1.9.1.3';
                    $akred = '<b>0402/SK/BAN-PT/Akred/S/I/2017</b> tanggal 26 Januari 2017';
                    $akreditasi = 'A';
                    break;
                case 'Sosiologi':
                    //$kode = 'UN5.2.1.9.1.4';
                    $akred = '<b>0090/SK/BAN-PT/Akred/S/I/2017</b> tanggal 10 Januari 2017';
                    $akreditasi = 'A';
                    break;
                case 'Ilmu Politik':
                    //$kode = 'UN5.2.1.9.1.6';
                    $akred = '<b>161/SK/BAN-PT/Akred/S/I/2018</b> tanggal 03 Januari 2018';
                    $akreditasi = 'A';
                    break;
                case 'Ilmu Administrasi Publik':
                    //$kode = 'UN5.2.1.9.1.1';
                    $akred = '<b>3315/SK/BAN-PT/Akred/S/XXII/2016</b> tanggal 27 Desember 2016';
                    $akreditasi = 'A';
                    break;
                case 'Antropologi Sosial':
                    //$kode = 'UN5.2.1.9.1.5';
                    $akred = '<b>4893/SK/BAN-PT/Akred/S/XII/2017</b> tanggal 19 Desember 2017';
                    $akreditasi = 'A';
                    break;
                case 'Ilmu Kesejahteraan Sosial':
                    //$kode = 'UN5.2.1.9.1.3';
                    $akred = '<b>139/SK/BAN-PT/Akred/S/IV/2015</b> tanggal 06 April 2015';
                    $akreditasi = 'A';
                    break;
                case 'Ilmu Administrasi Bisnis':
                    //$kode = 'UN5.2.1.9.1.7';
                    $akred = '<b>5101/SK/BAN-PT/Akred/S/XII/2017</b> tanggal 27 Desember 2017';
                    $akreditasi = 'A';
                    break;
                default:
                    //$kode = 'UN5.2.1.9.2.1';
                    $akred = '<b>849/SK/BAN-PT/Akred/Dipl-III/III/2018</b> tanggal 27 Maret 2018';
                    $akreditasi = 'B';
                    break;
            }

		$kode = 'UN5.2.1.9';
            ?>
  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;font-size:12pt">

            <h3><u>SURAT KETERANGAN</u></h3>
            <center style="margin-top:-18px"> Nomor  :  &emsp;&emsp; /<?php echo $kode?>/LLS/<?php echo $tahuns?></center>

            <br><br><br>

            Saya yang bertanda tangan dibawah ini:<br><br>
            <table style="font-size:12pt;">
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Nomor Ijazah </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><b><?php echo $isi['nomor_ijazah'] ?></b></td>
            </tr>


            </table>

            <p> Dengan  ini menerangkan   bahwa  Program Studi <?php echo $isi['program_studi']?> Fakultas  Ilmu Sosial dan  Ilmu  Politik Universitas  Sumatera Utara,  dinyatakan oleh  Badan  Akreditasi  Nasional  Perguruan  Tinggi (BAN-PT) terakreditasi dengan predikat:</p> <center>
            <p><b>AKREDITASI   A <br>
(Baik Sekali)
                </b></p></center>
            <p>(Sesuai   dengan   surat   keputusan   Badan  Akreditasi  Nasional   Perguruan   Tinggi Nomor: <?=$akred?> tentang  status, nilai, peringkat, dan masa berlaku hasil akreditasi program sarjana di perguruan tinggi), dan pada saat ini sedang dalam proses reakreditasi.</p>

            <p> Demikian  surat keterangan ini dibuat  untuk dipergunakan sebagaimana mestinya.
 </p><br><br>

             <div style="margin-left:60%">

          a.n Dekan<br>
        Wakil Dekan I
        <p></p><br><br><br>
            <b>Husni Thamrin, S.Sos, MSP</b><br>
             NIP.19720308 200501 1 001
          <br>
        </div>
        </div>

	</body>
</html>
<script>window.print();</script>
