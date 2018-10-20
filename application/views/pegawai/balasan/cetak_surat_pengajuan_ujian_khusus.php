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
            table {
                font-size:12pt;

            }
        </style>
	</head>
	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:140px; font-size:12pt" >
            <?php
            $date = date("Y-m-d");
            $t = explode("-",$date);
            $tahuns = $t[0];
            $kode = $isi['departemen'];

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
            Nomor&emsp;:    &emsp;&emsp;     /<?php echo $kode ?>/SPB/<?php echo $tahuns?><br>
            Lamp.&emsp;: 1 (satu) berkas.	<br>
            Hal	&emsp;&emsp;: Ujian Khusus<br>
            <br><br><br>


            Yth:<br>
            ............................<br>
            ................... <br>
            Program S-1/Diploma III FISIP USU<br>
            Medan <br><br><br>

            Dengan hormat, sesuai dengan Peraturan Rektor USU Nomor : 03  Tahun 2017 , Tentang Peraturan Akademik Program Sarjana Universitas Sumatera Utara Pasal 21 ayat 4, bersama ini kami  mohon kesediaan Saudara untuk menguji kembali mahasiswa tersebut dibawah ini: <br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp; Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'];  ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['departemen'] ?></td>
            </tr>

            </table>


            <p> Selanjutnya kami informasikan bahwa sesuai dengan kesepakatan di FISIP USU              hasil ujian ekstra (khusus) maksimal adalah B.<br><br>
Demikian hal ini disampaikan, atas perhatian dan kerjasama diucapkan terima kasih.
</p>
          <br><br>

              <div style="margin-left:60%">
                  a.n Dekan<br>
        Wakil Dekan
        <p></p><br><br><br><br>
           <b>Husni Thamrin, S.Sos, MSP</b><br>
            NIP.19720308 200501 1 001<br><br>

        </div>
            <br><br><br>
            <small><i>Catatan :<br>
Lampiran Nilai untuk Bagian Pendidikan<br>
diserahkan langsung oleh Dosen yang bersangkutan
</i></small>

        </div>

	</body>
</html>
<script>window.print();</script>
