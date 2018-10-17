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
		<title> Cetak Surat Permohonan Mengikuti Ujian Komprehensif</title>
        <style>
            th{
               padding: 10px;
            }

            .garping{
                border: 1px solid black;
                border-collapse: collapse;


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
		<div style="margin-left:80px;margin-right:80px; margin-top:150px;font-size:12pt">

            <h3>SURAT KETERANGAN BERHAK MENGIKUTI UJIAN <br>
                SKRIPSI/KOMPREHENSIF/TUGAS AKHIR</h3>
	    <br>

            <p>Yang bertanda tangan di bawah ini Kepala Sub Bagian Akademik Pelaksana Tata Usaha pada Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara menerangkan bahwa mahasiswa tersebut dibawah ini:</p>

            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nama'] ?>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td > <?php echo $isi['nim'] ?>  </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Jenjang Studi </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['jenjang'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td>  <?php echo $isi['program_studi'] ?> </td>
            </tr>


            </table>

            <p>Setelah diteliti berkas bersangkutan dengan seksama berupa kewajiban yang berkaitan dengan status mahasiswa meliputi :</p>
            <table class="garping" width="90%" align="center">
            <tr align="center">
                <td class="garping">No. </td>
                <td class="garping">Keterangan</td>
                <td class="garping">Petugas Pemeriksa</td>
            </tr>
            <tr>
                <td align="center" class="garping">1. </td>
                <td class="garping" style="text-align:left; padding-left:5px;">Bukti Lunas SPP dari semester awal s.d semester akhir per tahun akademik.</td>
                <td class="garping" rowspan="3" style="padding-left:5px">Kepala Sub Bagian Akademik FISIP USU</td>
            </tr>
            <tr>
                <td align="center" class="garping">2. </td>
                <td class="garping" style="text-align:left;padding-left:5px;">Bukti Lunas uang skripsi.</td>

            </tr>
            <tr>
                <td align="center" class="garping">3. </td>
                <td class="garping" style="text-align:left;padding-left:5px;">Telah menyelesaikan urusan tagihan dari perpustakaan USU/FISIP USU.</td>

            </tr>
           <tr>
                <td align="center" class="garping">4. </td>
                <td class="garping" style="text-align:left;padding-left:5px;">Telah menyelesaikan semua teori dari semester awal s.d terakhir per tahun akademik pada jenjang S1/D3.</td>
                <td class="garping" style="padding-left:5px">Petugas Urusan <br>Program Studi</td>
            </tr>

            </table>




            <p>Mahasiswa tersebut telah berhak mengikuti ujian Skripsi/Komprehensif/Tugas Akhir.
 </p><br><br>

             <div style="margin-left:57%">

        Medan, <br>
        a.n Wakil Dekan I<br>
        Kepala Sub Bagian Akademik<br>
        <br><br><br>
            (Khairunnisa)<br>
            NIP. 196511231990032002
        </div>
        </div>

	</body>
</html>
<script>window.print();</script>
