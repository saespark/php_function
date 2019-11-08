<html>
<title>Data Karyawan</title>
<body>
	

	<h1 align="center">Data Karyawan PT. X</h1>
	

<?php
$koneksi = mysqli_connect("localhost","root","","karyawanx");
$data = mysqli_query($koneksi,"SELECT * FROM biodata");
?>
	<table align="center" border="1" width="100">
	<thead>
	<tr>
		<th bgcolor="green">Nomer </th>
		<th bgcolor="green">Nama</th>
		<th bgcolor="green">Alalamat</th>
		<th bgcolor="green">No telepon</th>
		<th bgcolor="green">Email</th>
	</tr>
	</thead>

	<?php while($hasil=mysqli_fetch_array($data))

{
	?>
	<tbody>
	<tr>
		<td align="center"><?php echo $hasil['nomer']; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
		<td><?php echo $hasil['no_tlpn']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
	</tr>
		<?php }?>
		</tbody>
	</table>

<br>
<br>
?>
</body>
	
</title>