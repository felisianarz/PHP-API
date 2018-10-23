<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="sayang.css">
</head>
<body>
<div class="judul">
		<h1 align="center">Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2 align="center">Menampilkan data dari database</h2>

	</div>

	<h3 align="center">Input data baru</h3>
	<form action="hoki.php" method="post">
		<table align="center">
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
	
	<h4 align="center"> <a href="index.php">Lihat Semua Data</a></h4>


	</form>
</body>
</html>