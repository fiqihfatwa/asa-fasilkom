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
		<title> Cetak Surat Permohonan Undangan Meja Hijau</title>
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

            <h3>UNDANGAN UJIAN MEJA HIJAU/KOMPREHENSIF/TUGAS AKHIR</h3>
<center style="margin-top:-10px;">Nomor:&emsp;&emsp;/<?php echo $kode?>/SPB/<?php echo $tahuns?>      </center>
            <br><br>




            Dengan hormat, bersama ini kami sampaikan undangan ujian meja hijau/ komprehensif, yang akan dilaksanakan pada:<br><br>

            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Hari/Tanggal </td>
                <td>&emsp;&emsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Pukul </td>
                <td>&emsp;&emsp;&nbsp;&nbsp;:&nbsp;</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Tempat</td>
                <td>&emsp;&emsp;&nbsp;&nbsp;:&nbsp;</td>
                <td></td>
            </tr>



            </table><br>

            Mahasiswa yang akan diuji:<br><br>
            <table style="margin-left:-10px;">
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nim'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;Program Studi</td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>



            </table><br>

            Penguji terdiri dari :
 <br><br>
            <table style="margin-left:-10px;">
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;1. Ketua Penguji</td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;2. Penguji I/ Penguji Tamu </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;&emsp;3. Penguji II/ Pembimbing </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> </td>
            </tr>



            </table>

            <p>Demikian disampaikan, atas perhatian dan  kerjasamanya diucapkan terima kasih.</p>
            <br><br>

             <div style="margin-left:65%">

        Medan, <br>
        a.n Dekan<br>
        Wakil Dekan I<br>

        <br><br><br><br>
            Husni Thamrin, S.Sos, MSP<br>
            NIP. 197203082005011001

        </div>
            <br><br><br><br>
          <small>
                Tembusan :	<br>
              PUMC FISIP - USU

            </small>

        </div>

	</body>
</html>
<script>window.print();</script>
