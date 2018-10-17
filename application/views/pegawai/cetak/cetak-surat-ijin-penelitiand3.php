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
		<title> Cetak Surat Izin Penelitian</title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:80px; font-size:12pt">

            <h3>SURAT PERMOHONAN IZIN PENELITIAN
            </h3><br><br>



            Kepada Yth,<br>
            <b>Wakil Dekan I</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara <br>
            di Medan <br>
            <br><br>
            Dengan hormat, <br>Saya yang bertanda tangan dibawah ini:<br>
            <table style="margin-left: 20px">
            <tr >
                <td>Nama </td>
                <td>: </td>
                <td><?php echo $isi['nama'] ?>  </td>
            </tr>
            <tr>
                <td>NIM </td>
                <td>: </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>Program Studi </td>
                <td>: </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td>: </td>
                <td><?php echo $isi['alamat'] ?></td>
            </tr>
             <tr>
                <td>Judul Proposal </td>
                <td>: </td>
                <td><?php echo $isi['judul_proposal'] ?></td>
            </tr>
            <tr>
                <td>Lokasi Penelitian </td>
                <td>: </td>
                <td><?php echo $isi['lokasi_penelitian'] ?></td>
            </tr>
            <tr>
                <td>Ditujukan Kepada </td>
                <td >: </td>
                <td><?php echo $isi['ditujukan_pertama'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td >: </td>
                 <td><?php echo $isi['ditujukan_kedua'] ?></td>
            </tr>
            <tr>
                <td style="color:white"></td>
                <td >: </td>
                <td><?php echo $isi['ditujukan_ketiga'] ?></td>
            </tr>
            <tr>
                <td>Dosen Pembimbing/PA </td>
                <td>: </td>
                <td><?php echo $isi['dosen_pa'] ?></td>
            </tr>

            </table>

            <p> Agar dapat kiranya diberikan surat izin penelitian/pengabdian data/pra survey. Hal ini saya perlukan untuk menyelesaikan Skripsi/Karya Ilmiah/Tugas Akhir. <br><br>Demikian disampaikan atas bantuannya Saya ucapkan terima kasih.

 </p><br><br><br>

             <div style="margin-left:60%">
         Medan, <br>                           Hormat Saya,
               <br><br><br><br><br>

        (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                     <br>
        </div><br><br><br>
           <small>
               <b>Lampirkan:</b><br>
	Foto Copy SPP Terakhir<br>
	Foto Copy KTM<br>
	Proposal Asli yang telah di ACC oleh Pembimbing dan Ketua Program Studi


            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
