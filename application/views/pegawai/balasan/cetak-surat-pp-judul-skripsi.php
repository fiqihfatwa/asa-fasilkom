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
        <title> Cetak Surat Balasan Pengajuan Judul Skripsi</title>
        <style>
            th{
               padding: 10px;
            }
        table {
            font-size: 12pt;
        }
        </style>
    </head>
    <body style="text-align: justify; font-family: Times New Roman">
        <?php
            $date = date("Y-m-d");
            $t = explode("-",$date);
            $tahuns = $t[0];
            $kode = $isi['program_studi'];
            $kaprodi = " ";
            $nip = " ";

            switch($kode)
            {
                case 'Ilmu Komunikasi':
                    $kode = 'UN5.2.1.9.1.3';
                    $kaprodi = 'Dra. Dewi Kurniawati, M.Si., Ph.D';
                    $nip = '196505241989032001';
                    break;
                case 'Sosiologi':
                    $kode = 'UN5.2.1.9.1.4';
                    $kaprodi = 'Dr. Harmona Daulay,S.Sos. M.Si';
                    $nip = '196907111994032002';
                    break;
                case 'Ilmu Politik':
                    $kode = 'UN5.2.1.9.1.6';
                    $kaprodi = 'Warjio, MA, Ph.D';
                    $nip = '197408062006041003';
                    break;
                case 'Ilmu Administrasi Publik':
                    $kode = 'UN5.2.1.9.1.1';
                    $kaprodi = 'Dr. Tunggul Sihombing, MA';
                    $nip = '196203011986031027';
                    break;
                case 'Antropologi Sosial':
                    $kode = 'UN5.2.1.9.1.5';
                    $kaprodi = 'Dr. Fikarwin, M.Ant';
                    $nip = '196212201989031005';
                    break;
                case 'Ilmu Kesejahteraan Sosial':
                    $kode = 'UN5.2.1.9.1.3';
                    $kaprodi = 'Agus Suriadi, S.Sos, M.Si';
                    $nip = '196708081994031004';
                    break;
                case 'Ilmu Administrasi Bisnis':
                    $kode = 'UN5.2.1.9.1.7';
                    $kaprodi = 'Prof. Dr. Marlon Sihombing, MA';
                    $nip = '195908161986111001';
                    break;
                default:
                    $kode = 'UN5.2.1.9.2.1';
                    $kaprodi = 'Drs. Rasudyn Ginting, M.Si';
                    $nip = '195908141986011002';
                    break;
            }
            ?>
  <br><br>
        <div style="margin-left:80px;margin-right:80px; margin-top:180px; font-size:12pt">

            Nomor&emsp;:&emsp;&emsp;/<?php echo $kode?>/KRK/<?php echo $tahuns?>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Medan,<br>
            Lamp &emsp;: 1 (satu) eks <br>
            Hal &emsp;&emsp;: Penugasan Membimbing Skripsi<br>

<br><br><br>
            Yth:<br>
            ..............................<br>
            <b>Staf Pengajar Program Studi </b><br>
            Program Studi.................<br>
            FISIP-USU<br>
            di Medan<br>

            <p>Dengan hormat, dengan ini kami menugaskan Bapak/Ibu untuk membimbing penulisan skripsi mahasiswa tersebut di bawah ini: </p>
            <table>
            <tr style="margin-top:-20px">
                <td>&emsp;&emsp;&emsp; Nama </td>
                <td>&emsp;&emsp;&emsp; :&nbsp; </td>
                <td><?php echo $isi['nama'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; NIM </td>
                <td>&emsp;&emsp;&emsp; : &nbsp; </td>
                <td><?php echo $isi['nim'] ?> </td>
            </tr>
            <tr>
                <td>&emsp;&emsp;&emsp; Judul Sementara </td>
                <td>&emsp;&emsp;&emsp; :&nbsp; </td>
                <td>  </td>
            </tr>


            </table>

              <p> Dengan kedudukan sebagai pembimbing. </p>


            <p> Demikian hal ini kami sampaikan atas perhatian dan kerjasama yang baik kami ucapkan terima kasih.
 </p><br><br><br>

             <div style="margin-left:60%">

        <p>Ketua,</p>
        <br><br><br><br>
                  <b><?php echo $kaprodi ?></b><br>
            NIP.<?php echo $nip ?>
                <br>

        </div>



        </div>

    </body>
</html>
<script>window.print();</script>
