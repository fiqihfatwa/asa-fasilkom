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
         <style>         th {             padding:10px;          } h3{font-size:14pt; text-align:center;}                           table{         font-size: 12pt;         }                  </style>  	</head> 	<body style="text-align: justify; font-size:12pt; font-family: Times New Roman">


  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:120px;font-size:12pt">
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
             <u><h3>SURAT KETERANGAN</h3></u>
            <center style="margin-top:-18px"> Nomor  : &emsp;&emsp;/<?php echo $kode?>/LLS/<?php echo $tahuns?></center><br><br><br>

            <br><br>
            Dekan Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara menerangkan bahwa mahasiswa:<br><br>
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
                <td>&emsp;&emsp;Program Studi</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['program_studi'] ?></td>
            </tr>

           <tr>
                <td>&emsp;&emsp;Tingkat/Semester</td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['semester'] ?></td>
            </tr>


            </table>

            <p>adalah benar mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sumatera Utara  dan aktif kuliah pada Semester Ganjil Tahun Akademik <?php echo $isi['tahun_ajaran'] ?></p>

            <p>Demikian surat keterangan ini dibuat untuk dapat mengurus KRS dan yang hilang.



 </p><br><br><br><br>

             <div style="margin-left:60%">

        Medan<br>

                a.n Dekan<br>
        Wakil Dekan I
        <br><br><br><br><br>
        Husni Thamrin, S.Sos, MSP<br>
            NIP.19720308 200501 1 001
        </div>
        </div>

	</body>
</html>
<script>window.print();</script>
