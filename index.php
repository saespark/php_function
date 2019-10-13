<html>
<title>	
	OMEN
</title>
<body>
	HALLO INI WEBSITE MANG OMEN
	
	
	
	<h5>Berikut ini adalah data karyawan yang lulus</h5>
	<table>



<?php
$koneksi = mysqli_connect("localhost","root","","karyawan");
$data = mysqli_query($koneksi,"SELECT * FROM biodata WHERE status = 'lulus'");
?>
		<thead>
		<tr>
		
		<th> nomer</th>
		<th> name</th>
		<th> no tlp	</th>
	</tr>
	</thead>

	<?php while($hasil=mysqli_fetch_array($data))

{
	?>
	<tbody>
	<tr>
	<td><?php echo $hasil['nik']; ?></td>
	<td><?php echo $hasil['nama']; ?></td>
	<td><?php echo $hasil['tlpn']; ?></td>
		</tr>
		<?php }?>
		</tbody>
	</table>

<br>
<br>
<?php

$angka_pertama = 1;
$angka_kedua = 2;
$hasil_angka = $angka_pertama + $angka_kedua;

echo $angka_pertama;
echo $angka_kedua;
echo ("<br>berikut adalah hasil angka pertama di tambah angka kedua");
echo $hasil_angka;

$sifat_anjani = "pemalas";
echo $sifat_anjani;
?>
</body>
	
</title>