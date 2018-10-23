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
		<center><u style="font-size:24px;">SURAT KETERANGAN</u><br>
			Nomor &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/UN5.2.1.14/KMS/<?php echo date('Y');?>
		</center>
		<br>
		<p>Dekan Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara dengan ini menerangkan bahwa:</p>
		<table>
			<?php foreach ($detail_surat as $row) {
				$data[$row['name']]=$row['keterangan'];
			 } ?>
			<tr>
				<td>Nama/NIM</td>
				<td>:&nbsp;<?php echo $data['nama']?>/<?php echo $data['nim']?></td>
			</tr>
			<tr>
				<td>Tempat/Tgl.Lahir</td>
				<td>:&nbsp;<?php echo $data['tempat']?>/<?php echo $data['tglLahir']?></td>
			</tr>
			<tr>
				<td>Jenjang studi/Dept/Prodi</td>
				<td>:&nbsp;<?php echo $data['j_studi']?>/<?php echo $data['dept']?>/<?php echo $data['prodi']?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:&nbsp;<?php echo $data['alamat']?></td>
			</tr>
			<tr>
				<td>No HP/Email</td>
				<td>:&nbsp;<?php echo $data['hp']?>/<?php echo $data['email']?></td>
			</tr>
			<tr>
				<td>Thn Masuk/Sem./Rencana Tamat</td>
				<td>:&nbsp;<?php echo $data['ThnMsk']?>/<?php echo $data['semester']?>/<?php echo $data['rencanaTamat']?></td>
			</tr>
			<tr>
				<td>IPS/IPK</td>
				<td>:&nbsp;<?php echo $data['ips']?>/<?php if($data['ipk']==''){echo ".........";}else{echo $data['ipk'];}?></td>
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
<!-- <script>
	window.print();
</script> -->
