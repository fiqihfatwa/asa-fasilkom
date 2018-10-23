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
		<br>
		<br>
		<br>
		Yth. Bapak/IbuWakil Dekan I
		<br>
		Fasilkom-TI
		<br>
		Di Medan
		<br>
		<p>Dengan hormat, saya yang bertanda tangan dibawah ini :</p>
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
				<td>Alamat/HP/Email</td>
				<td>:&nbsp;<?php echo $data['alamat']?>/<?php echo $data['hp']?>/<?php echo $data['email']?></td>
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
		<p>Memohon kepada Bapak/Ibu agar dapat kiranya memberikan Surat Keterangan/Rekomendasi yang menyatakan bahwa saya masih kuliah di Fasilkom-TI.</p>
		<p>Surat Keterangan/Rekomendasi tersebut dipergunakan untuk keperluan <i><u><?php echo $data['keterangan']?></u></i> dan sebagai bahan pertimbangan turut saya lampirkan :</p>
		<p style="padding-left:25px">
			1. Fotokopi SPP terakhir <br>
	    2. Fotokopi KTM
		</p>
		<p></p>
		<p>Demikian permohonan inisaya sampaikan, atas perhatian Bapak/Ibu saya ucapkan terima kasih.</p>
		<p></p>
		<p></p>
		<div style="padding-left:355px">
			<p style="padding-left:15px">
			Medan, <br>
			Pemohon,
			</p>
			<table style="border:solid;padding-left:15px">
				<tr>
					<td>Materai <br> 6000</td>
				</tr>
			</table>
			<p>_________________________</p>
		</div>
 </section>
	</body>
</html>
<script>
	window.print();
</script>
