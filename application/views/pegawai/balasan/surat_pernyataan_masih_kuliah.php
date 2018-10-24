<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title?></title>
	</head>
	<body>
		<table>
			<tr>
			<td>
				<img src="<?php echo base_url()?>assets/images/logof.png">
			</td>
			<td>
				<center style="margin-top:-4px;">
				<p style="font-size:18px;margin-right:2px;">KEMENTERIAN RISET, TEKNOLOGI DAN PERGURUAN TINGGI</p>
					<p style="font-weight:bold;margin-top:-20px;">UNIVERSITAS SUMATERA UTARA <br/> FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI</p>
				<p style="margin-top:-20px;">Jalan Universitas No. 9 Kampus USU Medan 20155
					<br>Telepon/Fax : 061- 8222129
					<br>Laman: www.fasilkom-ti.usu.ac.id, email: fasilkom-ti@usu.ac.id</p>
				</center>
			</td>
		</tr>
	</table>
	<hr style="margin-top:-15px;border:3px solid;">
	<section style="padding-left:35px">
		<center><u style="font-size:24px;">SURAT PERNYATAAN MASIH KULIAH</u><br>
			Nomor &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/UN5.2.1.14/KMS/<?php echo date('Y');?>
		</center>
		<br>
		<p>Dekan Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara menerangkan bahwa mahasiswa yang tersebut di bawah ini adalah benar mahasiswa di Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara dengan identitas:</p>
		<table>
			<?php foreach ($detail_surat as $row) {
				$data[$row['name']]=$row['keterangan'];
			 } ?>
			<tr>
				<td>1.Nama</td>
				<td>:&nbsp;<?php echo $data['nama']?></td>
			</tr>
			<tr>
				<td>2.NIM</td>
				<td>:&nbsp;<?php echo $data['nim']?></td>
			</tr>
			<tr>
				<td>3.Tempat/Tgl.Lahir</td>
				<td>:&nbsp;<?php echo $data['tempat']?>/<?php echo $data['tglLahir']?></td>
			</tr>
			<tr>
				<td>4.Jenjang Studi/Dept/Prodi</td>
				<td>:&nbsp;<?php echo $data['j_studi']?>/<?php echo $data['dept']?>/<?php echo $data['prodi']?></td>
			</tr>
			<tr>
				<td>5.Alamat</td>
				<td>:&nbsp;<?php echo $data['alamat']?></td>
			</tr>
			<tr>
				<td>6.Email</td>
				<td>:&nbsp;<?php echo $data['email']?></td>
			</tr>
			<tr>
				<td>7.HP/Telepon</td>
				<td>:&nbsp;<?php echo $data['hp']?></td>
			</tr>
			<tr>
				<td>8.Thn Masuk/Sem./Rencana Tamat</td>
				<td>:&nbsp;<?php echo $data['ThnMsk']?>/<?php echo $data['semester']?>/<?php echo $data['rencanaTamat']?></td>
			</tr>
			<tr>
				<td>9.Semester dan Tahun Berjalan</td>
				<td>:&nbsp;<?php echo $data['semester']?>/<?php echo date('Y')?></td>
			</tr>
			<tr>
				<td>10.IPS/IPK</td>
				<td>:&nbsp;<?php echo $data['ips']?>/<?php echo $data['ipk']?></td>
			</tr>
		</table>
		<br>
		<p style="font-weight:bold">Orang tua/wali mahasiswa tersebut adalah:</p>
		<table>
			<tr>
				<td>11.Nama</td>
				<td>:&nbsp;<?php echo $data['nama_ortu']?></td>
			</tr>
			<tr>
				<td>12.NIP/NRP/Nopen</td>
				<td>:&nbsp;<?php if($data['nip']==''){ echo ".......";}else{echo $data['nip'];}?></td>
			</tr>
			<tr>
				<td>13.Pangkat/Golongan</td>
				<td>:&nbsp;<?php if($data['pangkat']==''){ echo "......."; }else{echo $data['pangkat'];}?>/<?php if($data['golongan']==''){ echo "......."; }else{echo $data['golongan'];}?></td>
			</tr>
			<tr>
				<td>14.Jabatan</td>
				<td>:&nbsp;<?php if($data['jabatan']==''){ echo "......."; }else{echo $data['jabatan'];}?></td>
			</tr>
			<tr>
				<td>15.Instansi</td>
				<td>:&nbsp;<?php if($data['instansi']==''){ echo "......."; }else{echo $data['instansi'];}?></td>
			</tr>
			<tr>
				<td>16.Alamat Orang Tua</td>
				<td>:&nbsp;<?php echo "Kec.".$data['kec'];?>/<?php echo "Kab.".$data['kab'];?>/<?php echo "Kota.".$data['kota'];?></td>
			</tr>
		</table>
		<p>
			Benar adalah mahasiswa Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara pada tahun Akademik <?php echo date('Y')?>/<?php echo date('Y')+1?>
 			Surat keterangan ini dipergunakan untuk keperluan <u><i><?php echo $data['keterangan']?></u></i>
		</p>
		<p></p>
		<p>Demikian surat keterangan ini diperbuat untuk dapat dipergunakan seperlunya.</p>
		<p></p>
		<p></p>
		<div style="padding-left:355px">
			<p style="padding-left:15px">
			Medan, <br>
			a.n. Dekan <br>
			Wakil Dekan I
			</p>
			<br>
			<br>
				<p><u>Dr.Elviawaty Muisa Zamzami, ST, MT, MM</u>
					<br>NIP. 19700716 200501 2 002
				</p>
		</div>
 </section>
	</body>
</html>
<script>
	window.print();
</script>
