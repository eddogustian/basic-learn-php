<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>
<body>
	<a href="<?php echo $base_url.'index.php?page=pengguna'; ?>">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA USER</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>