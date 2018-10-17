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
         <style>         th {             padding:10px;          } h3{font-size:14px; text-align:center;}                           table{         font-size: 12px;         }                  </style>  	</head> 	<body style="text-align: justify; font-family: Times New Roman">

  <br><br>
		<div style="margin-left:80px;margin-right:80px;margin-top:120px; font-size:12px">

            <b>SURAT PERMOHONAN <br> PENGGANTI IJAZAH HILANG/RUSAK
</h3><br><br><br><br>



            Kepada Yth,<br>
            <b>Bapak Dekan Fisip USU</b><br>

            Medan <br>
            <br><br><br>
            Sehubungan dengan surat ini, saya yang bertanda tangan dibawah ini :<br><br>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td<?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Tempat/Tgl Lahir</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['ttl'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Pekerjaan </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['pekerjaan'] ?></td>
            </tr>
             <tr>
                <td>&emsp;&emsp;Alamat</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['alamat'] ?></td>
            </tr>


            </table>

            <p> Dengan ini bermohon kepada Bapak Dekan agar dapat memproses hilangnya ijazah dan transkrip nilai saya yang disebabkan karena keteledoran saya. Adapun syarat-syarat yang diperlukan untuk proses tersebut telah saya lengkapi pada surat permohonan ini.</p>
    <p>Demikian surat permohonan ini saya sampaikan dan atas perhatiannya diucapkan terima kasih.

 </p><br><br><br><br>

             <div style="margin-left:60%">

        <P ><b>Hormat Saya</b></P><br><br>

        <br>(<?php echo $isi['nama'] ?>)<br>
        NIM: <?php echo $isi['nim'] ?>
             <br>
        </div><br><br><br>
           <small>
               <b>Lampiran yang harus dilengkapi :</b><br>
•	Surat Keterangan Hilang Dari Kepolisian<br>
•	Foto Copy KTP 1 lembar<br>
•	Foto Copy Ijazah 1 lembar<br>
•	Foto Copy Transkrip Nilai


            </small>
        </div>

	</body>
</html>
<script>window.print();</script>
