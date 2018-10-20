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
		<title> Cetak Surat AKK </title>
        <style>
        th {
            padding:10px;

        }
        table{
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
		<div style="margin-left:80px;margin-right:80px; margin-top:130px; font-size:12pt">

            Nomor&emsp;: &emsp;&emsp;/<?php echo $kode?>/SPB/<?php echo $tahuns?><br>
            Lamp.&emsp;: 1 (satu) berkas.	<br>
            Hal&emsp;&emsp; : Permohonan AKK<br>
<br><br>
            Yth,<br>
            Rektor	<br>
            u.p. Wakil Rektor I<br>
            Universitas Sumatera Utara<br>
            di Medan

            <br><br><br>

            Dengan hormat, bersama ini kami sampaikan permohonan Aktif Kuliah Kembali (AKK) atas nama mahasiswa yang tersebut di bawah ini:
<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>


            </table>

                Sebagai bahan pertimbangan bersama ini turut kami lampirkan:	<br>

                &emsp;&emsp;&emsp;1. Permohonan AKK Mahasiswa	<br>
                &emsp;&emsp;&emsp;2. Fotokopi SPP terakhir


            <br>
            <p>Perlu kami  informasikan bahwa  yang  bersangkutan tidak aktif kuliah pada semester ......... (T.A. <?php echo $isi['tahun_akademik']?>), dan untuk aktif kuliah kembali
pada semester ........ T.A. ....../...... (permohonan terlampir).
</p>

            <p> Demikian disampaikan untuk dapat diproses lebih lanjut,  atas
perhatian dan kerjasama diucapkan terima kasih.

 </p><br><br><br>

             <div style="margin-left:60%">

                 a.n Dekan<br>
        Wakil Dekan I
        <br><br><br><br><br>
           <b>Husni Thamrin, S.Sos, MSP</b><br>
           NIP.19720308 200501 1 001
                <br>

        </div>
            <br><br><br>
            <div style="font-size: 10pt">
           Tembusan :	<br>Yth. Ketua Prodi <?php echo $isi['program_studi'] ?>.
            </div>


        </div>

	</body>
</html>
<script>window.print();</script>
