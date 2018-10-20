<?php

    // include "../../../config/session.php";
		//
    // $id = $_GET['id'];
		//
		//
    //             $id = $_GET['id'];
    //             $sql = $koneksi->query("SELECT * FROM detail_surat join surat on surat.id_surat=detail_surat.id_surat WHERE id_isi='$id'");
    //             while($data = $sql->fetch_array()){
    //                 $isi[$data['name']] = $data['keterangan'];
    //             }
		foreach ($detail_surat as $data) {
			$isi[$data['name']] = $data['keterangan'];
		}
?>
<html>
	<head>
		<title> Cetak Surat </title>
         <style>         th {             padding:10px;          } h3{font-size:14px; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-size:12pt;font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;font-size:12pt">

            <h3>SURAT PERMOHONAN KEHILANGAN <br>KEHILANGAN KARTU TANDA MAHASISWA</h3><br><br><br><br>


            Kepada Yth,<br>
            <b>Program Studi <?php echo $isi['program_studi'] ?></b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik<br>
            Universitas Sumatera Utara<br>
            Medan<br>
            <br><br><br><br>

            Dengan hormat, Saya yang bertanda tangan dibawah ini :<br><br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>

           <tr>
                <td>&emsp;&emsp;Program Studi</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>

            <tr>
                <td>&emsp;&emsp;Semester</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['semester'] ?></td>
            </tr>


            </table>

            <p> Mengajukan surat permohonan ini untuk keperluan pengurusan kehilangan Kartu Tanda Mahasiswa</p>
            <p>Demikian surat permohonan ini saya buat untuk keperluan pengurusan KTM yang hilang. Atas perhatian Bapak/Ibu saya ucapkan terima kasih. </p>



<br><br><br><br><br>

             <div style="margin-left:60%">

        <b>Medan</b><br><br>

        <br><br><br><br>
        (<?php echo $isi['nama'] ?>)<br>NIM: <?php echo $isi['nim'] ?>
                     <br>
        </div>
        </div>

	</body>
</html>
<script>window.print();</script>
