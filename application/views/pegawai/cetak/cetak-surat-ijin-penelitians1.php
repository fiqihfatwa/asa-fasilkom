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
		<title> Cetak Surat Izin Penelitian </title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">

	<body >

  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:80px; font-size:12pt">

            <h3>SURAT PERMOHONAN IZIN PRA PENELITIAN
            </h3><br><br>



            Kepada Yth,<br>
            <b>Kasubbag Pendidikan</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara <br>
            di Medan <br>
            <br>
            Dengan hormat, <br>Saya yang bertanda tangan dibawah ini:<br><br>
            <table style="margin-left: 20px">
            <tr>
                <td>Nama </td>
                <td>: </td>
                <td><?php echo $isi['nama'] ?> </td>
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
                <td>Semester</td>
                <td>: </td>
                <td><?php echo $isi['semester'] ?></td>
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
                <td>: </td>
                <td><?php echo $isi['ditujukan_ke'] ?></td>
            </tr>
            <tr>
                <td>Dosen Pembimbing </td>
                <td>: </td>
                <td><?php echo $isi['dosen_pembimbing'] ?></td>
            </tr>

            </table>

            <p> Agar dapat kiranya diberikan surat izin penelitian/pengabdian data/pra survey. Hal ini saya perlukan untuk menyelesaikan skripsi/karya ilmiah. <br>Demikian disampaikan, atas bantuannya Saya ucapkan terima kasih.

 </p><br><br>

             <div style="margin-left:60%">
        Medan, <br>
        Pemohon <br><br>
       <br><br><br>
        (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                     <br>
        </div><br><br><br>
           <small>
               <b>Lampiran yang harus dilengkapi :</b><br>
1. Foto Copy SPP terakhir		(1 lembar)<br>
2. Foto Copy KTM		(1 lembar)<br>
3. Foto Copy Out Line Judul yang telah di ACC oleh Pembimbing/Program Studi (Pra Penelitian)<br>
4. Proposal Asli yang telah di ACC oleh Pembimbing/Program Studi (Penelitian).

            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
