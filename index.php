<?php
$servername = "localhost";
$database = "bot_wa_api";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
if (!empty($_GET["nama"])){
    echo $_GET["nama"];
    $nama = $_GET["nama"];
    mysqli_query($conn,"INSERT INTO name VALUE('','$nama')");
}
mysqli_close($conn);
?>
<html>
<head>
	
</head>
<body>

	
	<h3></h3>
	<form method="GET">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>

