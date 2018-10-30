<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="yagitu.css">
</head>
<body>
<div class="judul">
		<h1><font color=#0c2461>Membuat CRUD Dengan PHP Dan MySQL</font></h1>
		<h2><font color=#0c2461>Menampilkan data dari database</font></h2>

	</div>

	<br/>

	<a href="index.php"><font color=#CCCCCC>Lihat Semua Data</font></a>

	<br/>
	<div >
		<h3>Input data baru</h3>
	</div>
	
	<form action="hoki.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>