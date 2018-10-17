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
  <br><br>
		<div style="margin-left:80px;margin-right:80px; margin-top:150px; font-size:12pt">

            Nomor&emsp;:    &emsp;&emsp;     /<?php echo $kode?>/PPM/<?php echo $tahuns?><br>
            Lamp.&emsp;: 1 (satu) berkas.	<br>
            Hal&emsp;&emsp;	: Permohonan Izin Pra Penelitian<br>
            <br><br>




            Yth,<br>
            <b>Bapak/Ibu <?php echo $isi['ditujukan_ke'] ?></b><br>
            di <br>
            &nbsp;Tempat<br>
            <br>

            Dengan hormat, kami mohon bantuan Saudara untuk dapat memberikan izin  Penelitian kepada mahasiswa yang tersebut dibawah ini:<br>
            <table>
            <tr >
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
                <td>Dosen Penanggungjawab </td>
                <td>: </td>
                <td><?php echo $isi['dosen_pembimbing'] ?></td>
            </tr>

            </table>

            <p>Penelitian ini diperlukan sesuai dengan mahasiswa di atas untuk mengumpulkan data/informasi sebagai bahan untuk penulisan skripsi /karya ilmiah. <br><br>Demikian hal ini disampaikan, atas perhatian dan kerjasama diucapkan terima kasih.

 </p><br><br>


             <div style="margin-left:60%">
                 a.n Dekan<br>
        Wakil Dekan I
        <br><p></p><br><br>
           <b>Husni Thamrin, S.Sos, MSP</b><br>
            NIP.19720308 200501 1 001
        </div><br>

        </div>

	</body>
</html>
<script>window.print();</script>
