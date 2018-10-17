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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:60px;margin-right:60px; font-size:12pt; margin-top:30px;">

            <h3>SURAT PERMOHONAN PERNYATAAN AKTIF MASIH KULIAH <br>UNTUK BIAYA TANGGUNGAN ORANG TUA</h3><br><br>

            Yth,<br>
            Wakil Dekan I<br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            di Medan <br> <br>


            <b>Hal</b>	: Permohonan/Pernyataan<br><br>


            Dengan hormat, Saya yang bertanda tangan dibawah ini:<br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Tingkat/Semester </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['semester'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;Program Studi	 </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Tempat/Tgl. Lahir</td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['ttl']?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;No. Telp./HP	 </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['no_hp'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;Alamat Mahasiswa </td>
                <td>&emsp;&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['alamat'] ?></td>
            </tr>


            </table>

            <p>Menyatakan dengan sesungguhnya bahwa saya adalah tanggungan dari orang tua saya:</p>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama_orangtua'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIP/NRP/NIK/No. Pensiun </td>
                <td>&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nip'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Pangkat/Golongan	 </td>
                <td>&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['pangkat'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;Instansi	 </td>
                <td>&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['instansi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Alamat Orang Tua</td>
                <td>&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['alamat_orangtua']?></td>
            </tr>

            </table>
          <p>Agar dapat kiranya diberikan Surat Keterangan Mahasiswa yang menyatakan bahwa saya adalah benar mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara, dan aktif kuliah pada Tahun Ajaran/Akademik <?php echo $isi['tahun_akademik']?>. Hal ini diperlukan untuk memperoleh Tunjangan Keluarga dari instansi orang tua saya.</p>

            <p> Demikian surat Permohonan/Pernyataan ini saya perbuat dengan sesungguhnya dan apabila pernyataan ini tidak benar, saya bersedia dituntut sesuai dengan ketentuan yang berlaku.
 </p><br>



             <div style="margin-left:56%"> <br>
       Medan,

        <br>Pemohon<br><br><br>
        <small style="border:2px solid; padding:6px; font-size:8pt; margin-right:140px">Materai 6000</small><br>
        <br>(<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
        <br>
        </div>
        </div>

	</body>
</html>

<script>window.print();</script>
