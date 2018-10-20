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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 14pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:60px; margin-top:60px; font-size:12pt;">

            <h3>SURAT PERMOHONAN <br> PENGAJUAN DAN PERSETUJUAN JUDUL SKRIPSI
</h3><br>

             <div align="right">
                 <P  style="padding-right:130px"> Medan, </P></div><br>

            Kepada Yth,<br>
            <b>Ketua Program Studi <?php echo $isi['program_studi']?></b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            di Medan <br>
            <br><br>
            Dengan hormat, sehubungan dengan surat ini saya yang bertanda tangan dibawah ini:<br>
            <table style="font-size:12pt;">
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
                <td>&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>


            </table>

            <p> Memberitahukan daftar judul yang telah diajukan dan disetuju/tidak setujui sebagai berikut:</p>

            <table  style="border-collapse: collapse;font-size:12pt;"  border="1px solid black" width="90%" >
                <thead  align='center' style='height:50px' >
                    <th>No.</th>
                    <th>Judul Skripsi</th>
                    <th>Persetujuan</th>

                </thead>
                <tbody >
                    <tr>
                        <td  align='center'>1</td>
                        <td>&nbsp;<?php echo $isi['judul_satu'] ?></td>
                        <td>&nbsp;</td>

                    </tr>
                    <tr >
                        <td  align='center'>2</td>
                        <td>&nbsp;<?php echo $isi['judul_dua'] ?></td>
                        <td>&nbsp;</td>

                    </tr >
                    <tr  >
                        <td align='center'>3</td>
                        <td>&nbsp;<?php echo $isi['judul_tiga'] ?></td>
                        <td>&nbsp;</td>

                    </tr>
                </tbody>
            </table>

            <p>Demikianlah permohonan ini Saya ajukan untuk pemeriksaan selanjutnya, atas perhatian Bapak/Ibu Saya ucapkan terima kasih.


 </p><br>

             <div style="margin-left:60%">

        <P >Hormat Saya,</P><br><br>

        <br>(<?php echo $isi['nama'] ?>)<br>
        NIM: <?php echo $isi['nim'] ?>

          <br>
        </div><br><br>
           <small>
               <b>Dokumen yang harus dilengkapi :</b><br>
1. Foto copy KTM dan SPP semester akhir sebanyak 1 lembar<br>
2. Foto copy KRS/KHS semester 1 sampai akhir sebanyak 1 lembar<br>
3. Jumlah SKS yang lulus minimal 110 SKS<br>
4. Surat Permohonan judul yang di acc dosen PA

            </small>
            <br><br>
            <small>
            <b><i>Keterangan: (rangkap 2 (dua))</i></b>
                <br>
•	1 arsip Prodi<br>
•	1 mahasiswa ybs.

            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
