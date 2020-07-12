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
	<form method="post" action="<?php echo $base_url.'index.php?page=action-add'; ?>">
		<table>
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Role</td>
				<td><input type="text" name="role"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>