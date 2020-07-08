<html>
<head>
<link rel="stylesheet" type="text/css" href="sauki.css"></head>
<body>
	<table class="table">
	<div class="table-responsive">
		<table align="center" class="table table-striped table-hover">
			<body>
				<div class="ketengah"></div>
			</body>
		</table>
		<center>
		<button class="tombol"><a align="center" href="form_registrasi.php">registrasi</a></button>
		<button class="tombol"><a align="center" href="menampilkan_data.php">tampilan data</a></button>
		<button class="tombol"><a align="center" href="menampilkan_data.php">home</a></button>
		<br><br>
		</center>
		
	</div>
</table>
<div>
<?php 
		$file="registrasi.txt";
		$fp=fopen($file, "a+");



		echo "<table border:0;>";
		while($data = fgets($fp, 100)){
			$pisah = explode("|", $data);
			echo "<center>";
			echo "<tr>
				<td>Nama : $pisah[0]</td>
				</tr>";

			echo "<tr>
				<td>Alamat : $pisah[1]</td>
				</tr>";

			echo "<tr>
				<td>Username: $pisah[2]</td>
				</tr>";

			echo "<tr>
				<td>Password : $pisah[3]</td>
				</tr>";

			echo "<tr>
				<td>Email : $pisah[4]</td>
				</tr>";
			echo "<tr>
				<td>Tanggal_Lahir: $pisah[5]</td>
				</tr>";
			echo "<tr>
				<td>Umur: $pisah[6]</td>
				</tr>";
			echo "<tr>
				<td>No_Tlp: $pisah[7]</td>
				</tr>";
			echo "<tr>
				<td>Jenis_kelamin: $pisah[8]</td>
				</tr>";
			echo "<tr>
				<td>Agama: $pisah[9]</td>
				</tr>";
			echo "<tr>
				<td>JUMLAH_PENGAJUAN: $pisah[10]</td>
				</tr>";
			echo "</center>";
		}
		echo "</table>";


 ?>
 </div>
</body>
</html>