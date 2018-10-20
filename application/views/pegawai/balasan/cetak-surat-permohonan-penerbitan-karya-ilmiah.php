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
		<title> Cetak Surat Permohonan Penerbitan Karya Ilmiah</title>
        <style>
            th{
               padding: 10px;
            }
            table{
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

            <h3>SURAT KETERANGAN PENERBITAN<br>
KARYA ILMIAH MAHASISWA/JURNAL

                </h3>
            <br><br>

            No	&emsp;: &emsp;&emsp;/TPJ.1/&emsp;&emsp;/<?php echo $tahuns ?><br>
            Hal&emsp;: Surat Keterangan Penerbitan Karya Ilmiah Mahasiswa/Jurnal

            <br><br>


            <p>Setelah Tim Pengelola Jurnal Program Studi <?php echo $isi['program_studi'] ?> Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara melakukan peninjauan, menelaah dan memeriksa secara seksama Ringkasan Hasil Penelitian, maka kami menerangkan bahwa mahasiswa  berikut:</p>

            <table>
            <tr>
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Judul </td>
                <td>&emsp;&emsp;:&nbsp;</td>
                <td> <?php echo $isi['judul'] ?> </td>
            </tr>



            </table>

            <p>Telah menyerahkan Ringkasan Hasil Penelitian  sesuai pedoman yang diberlakukan secara institusi. Adapun hasil ringkasan tersebut akan  kami terbitkan dalam jurnal <?php echo $isi['judul'] ?> secara elektronik untuk volume ...... Nomor ...... Bulan ........ Tahun .......
 </p>
            <p><b><i><u>JUDUL SKRIPSI :</u></i></b><br><br>......................................................................................................................................<br><br>......................................................................................................................................</p>
            <br>
            <p>Demikian surat keterangan ini kami buat untuk dapat dipergunakan.</p>
            <br><br><br>


             <div style="margin-left:65%">

        Medan, <br>
        Koordinator Tim,<br>

        <br><br><br><br>
            ..........................................<br>
            NIP.

        </div>
            <br><br><br><br>


        </div>

	</body>
</html>
<script>window.print();</script>
