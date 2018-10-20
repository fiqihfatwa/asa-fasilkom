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
		<title> Cetak Surat Pengajuan Judul TA </title>
         <style>         th {             padding:10px;          } h3{font-size:14px; text-align:center;}                           table{         font-size: 12px;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:50px;margin-right:50px; margin-top:120px;">

            <h3>SURAT PERMOHONAN <br> PENGAJUAN JUDUL TUGAS AKHIR
</h3><br>


            Kepada Yth,<br>
            <b>Ketua Program Studi Diploma III Administrsi Perpajakan </b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            Medan <br>
            <br>
            Dengan hormat, saya yang bertanda tangan dibawah ini :<br><br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Alamat </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['alamat'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;No. HP Aktif </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nomor_hp'] ?></td>
            </tr>


            </table>

            <p> Dengan ini mengajukan 3 (tiga) judul Laporan Tugas Akhir untuk dipertimbangkan sebagai bagian dari proses penyelesaian studi di Program Studi Diploma III Administrasi Perpajakan Fakultas Ilmu Sosial dan Ilmu Politik, Universitas Sumatera Utara.</p>
            <p>Adapun 3 (tiga) judul tersebut adalah :</p>

            <table style="border-collapse:collapse" border="1px solid black" width="80%" >
                <thead align="center" style='height:50px' >
                    <th>No.</th>
                    <th>Judul Skripsi</th>
                    <th>Persetujuan</th>

                </thead>
                <tbody >
                    <tr>
                        <td align="center">1</td>
                        <td><?php echo $isi['judul_satu']?></td>
                        <td> &emsp;&emsp;</td>

                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td><?php echo $isi['judul_dua']?></td>
                        <td> &emsp;&emsp;</td>

                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td><?php echo $isi['judul_tiga']?></td>
                        <td> &emsp;&emsp;</td>

                    </tr>
                </tbody>
            </table>

            <p>
Demikianlah surat permohonan ini saya ajukan, atas pertimbangan dan persetujuan Bapak/Ibu saya ucapkan terima kasih.



 </p><br><br>

            <div align="left"> <br>
         <P style="padding-right:230px;margin-top:-10px"><b>Disetujui oleh : </b></P>
        <P style="padding-right:200px;margin-top:-10px"><b>Ketua Program Studi</b></P>
        <P style="padding-right:200px;margin-top:-10px"><b>Diploma III Administrasi Perpajakan</b></P>
        <br>
        <br><br><br><br>
        <p style="padding-right:175px;margin-top:-50px">Drs. Rasyudin Ginting, M.Si</p>
        <p sytle="margin-top:-10px"> NIP. </p>
        <br>
        </div>

             <div style="margin-left:60%">
        <b>Medan, </b><br>

     <b>Hormat Saya</b><br><br><br>

        (<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
                     <br>
        </div><br><br><!--
           <small>
               <b>Lampirankan:</b><br>
•	Foto Copy SPP Terakhir<br>
•	Foto Copy KTM<br>
•	Proposal Asli yang telah di ACC oleh Pembimbing dan Ketua Program Studi


            </small>
            <br><br>
            <small>
            <b><i>Keterangan: (rangkap 2 (dua))</i></b>
                <br>
•	1 arsip Prodi<br>
•	1 mahasiswa ybs.

            </small>-->
        </div>

	</body>
</html>
<script>window.print();</script>
