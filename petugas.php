<?php
$conn = mysqli_connect('localhost','root','','spp_siswa');

$query = mysqli_query($conn, "SELECT * FROM petugas");
?>

<style>
table,
th,
td {
border: 1px solid;
}
</style>

<h3>Data Petugas</h3>
<table>
<tr>
	<th>No</th>
	<th>Nama Lengkap</th>
	<th>Level</th>
	<th>Username</th>
	<th>Password</th>
</tr>

<?php $no = 1; 
while ($row = mysqli_fetch_array($query)) : ?>
<tr>
<td><?= $no; ?></td>
<td><?= $row['nama_lengkap']; ?></td>
<td><?= $row['level']; ?></td>
<td><?= $row['username']; ?></td>
<td><?= $row['password']; ?></td>
<td><a href ="edit_petugas.php?id_petugas=<?= $row['id_petugas']; ?>"> Ubah</a></td>
</tr>
<?php $no++;
endwhile; ?>
</table>




