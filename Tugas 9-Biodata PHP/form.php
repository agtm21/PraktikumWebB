<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<header style="padding: 20px;" >
		
	</header>
	<h1>INPUT DATA</h1>
<form method="POST" action="ins.php">
	<table>
		<tr><td>Nama<td>:<input type="text" name="nama"></td></td></tr>
		<tr><td>Nim<td>:<input type="text" name="nim"></td></td></tr>
		<tr><td>Jenis Kelamin<td>:<input type="radio" name="jk" value="L">Laki-Laki
			<input type="radio" name="jk" value="P">Perempuan</td></td></tr>
		<tr><td>Agama<td>:<input type="text" name="agama"></td></td></tr>
		<tr><td>Jurusan<td>:<input type="text" name="jurusan"></td></td></tr>
		<tr><td>Alamat<td>:<textarea style="padding: 20px;" name="alamat"></textarea></td></td></tr>
		<tr><td>No.HP<td>:<input type="text" name="nohp"></td></td></tr>
		<tr><td><input type="submit" name="submit"></td></tr>
		<tr><td><a href="form_output.php"> Kembali Ke Halaman Utama</a></td></tr>
	</table>
</form>
</body>
</html>
