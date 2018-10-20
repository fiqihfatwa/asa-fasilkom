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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify;   font-size: 12pt;font-family: Times New Roman">


  <br><br>
		<div style="margin-left:60px;margin-right:60px; margin-top:130px;font-size:12pt">

            <h3><u>SURAT KETERANGAN</u></h3>
            <center style="margin-top:-18px">Nomor: &emsp;&emsp;/UN5.2.1.9/KMS/2018</center>
            <br><br>




            Dekan Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara menerangkan bahwa:<br><br>
            <table>
            <tr >
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp;: &nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIM </td>
                <td>&emsp;: &nbsp; </td>
                <td><?php echo $isi['nim'] ?></td>
            </tr>

                 <tr>
                <td>&emsp;&emsp;Program Studi	 </td>
                <td>&emsp;: &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>
            <tr>
                <td >&emsp;&emsp;Tempat/Tgl. lahir</td>
                <td>&emsp;: &nbsp;</td>
                <td><?php echo $isi['ttl']?></td>
            </tr>
                  <tr>
                <td>&emsp;&emsp;Fakultas </td>
                <td>&emsp;: &nbsp;</td>
                <td> Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara</td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Tingkat/Semester	 </td>
                <td>&emsp;: &nbsp;</td>
                <td>..../<?php echo $isi['semester'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;Tahun Akademik </td>
                <td>&emsp;: &nbsp;</td>
                <td><?php echo $isi['tahun_akademik'] ?></td>
            </tr>


            </table>

            <p>Orang tua anak tersebut:</p>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;Nama </td>
                <td>&emsp; : &nbsp; </td>
                <td><?php echo $isi['nama_orangtua'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;NIP/NRP/NIK/No. Pensiun </td>
                <td>&emsp; : &nbsp; </td>
                <td><?php echo $isi['nip'] ?></td>
            </tr>
            <tr>
                <td>&emsp;&emsp;Pangkat/Golongan	 </td>
                <td>&emsp; : &nbsp; </td>
                <td><?php echo $isi['pangkat'] ?></td>
            </tr>
                 <tr>
                <td>&emsp;&emsp;Instansi	 </td>
                <td>&emsp; : &nbsp; </td>
                <td><?php echo $isi['instansi'] ?></td>
            </tr>


            </table>
          <p>Adalah benar mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara dan aktif kuliah sampai dengan Semester <?php echo $isi['semester'] ?> Tahun Akademik <?php echo $isi['tahun_akademik'] ?>.
              Surat permohonan ini dipergunakan untuk memperoleh Tunjangan Keluarga dari <b>Instansi <?php echo $isi['instansi'] ?></b>
</p>

            <p>Apabila dikemudian hari surat keterangan ini tidak benar, yang mengakibatkan kerugian terhadap Negara Republik Indonesia, maka mahasiswa bersangkutan menanggung kerugian tersebut.
 </p><br>


             <div style="margin-left:56%"> <br>
       Medan,<br>


                 a.n Dekan<br>
        Wakil Dekan I
        <br><br><br><br><br>
           <b>Husni Thamrin, S.Sos, MSP</b><br>
            NIP.19720308 200501 1 001
                <br>
        </div>
        </div>

	</body>
</html>

<script>window.print();</script>
