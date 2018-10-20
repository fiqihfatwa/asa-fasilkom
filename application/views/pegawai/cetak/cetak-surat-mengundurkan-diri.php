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
		<title> Cetak Surat Mengundurkan Diri </title>
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}

                 table{
        font-size: 12pt;
        }

        </style>


    </head> 	<body style="text-align: justify; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px; font-size:12pt ">

            <h3>SURAT PERMOHONAN MENGUNDURKAN DIRI </h3><br><br><br><br><br>
            Kepada Yth,<br>
            <b>Wakil Dekan I</b><br>
            Fakultas Ilmu Sosial dan Ilmu Politik <br>
            Universitas Sumatera Utara <br>
            di Medan
            <br><br><br>

            Dengan hormat, saya yang bertanda tangan dibawah ini :<br><br>
             <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Program Studi </td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp;Jenjang</td>
                <td>&emsp;&emsp;&emsp; : &nbsp;</td>
                <td style="text-transform: uppercase;"><?php echo $isi['jenjang'] ?></td>
            </tr>

            </table>


            <p> Dengan ini saya mengajukan pengunduruan diri saya dari Fakultas Ilmu Sosial dan Ilmu Politik, Program Studi <?php echo $isi['program_studi'] ?>, dengan alasan <?php echo $isi['alasan'] ?></p>

            <p> Demikian surat permohonan ini saya buat, atas perhatian dan bantuan Bapak/Ibu Saya ucapkan terima kasih.</p><br><br><br>

             <div style="margin-left:60%">


        <P>Hormat Saya,</P>
        <br>
        <br><br>

        <br>(<?php echo $isi['nama'] ?>)<br> NIM: <?php echo $isi['nim'] ?>
            <br>
        </div>

        </div>

	</body>
</html>
<script>window.print();</script>
