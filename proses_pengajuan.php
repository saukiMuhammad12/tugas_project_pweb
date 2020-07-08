<html>
<head>
<link rel="stylesheet" type="text/css" href="sauki.css"></head>
<body>
<div>
<?php 
$file="registrasi.text";
$fp =fopen($file,"a+");
$Nama = $_POST['nama'];
$Alamat = $_POST['Alamat'];
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$Tanggal_Lahir = $_POST['tanggal'];
$Umur = $_POST['umur'];
$No_Tlp = $_POST['tlpn'];
$Jenis_kelamin = $_POST['jenis_kelamin'];
$Agama = $_POST['agama'];
$JUMLAH_PENGAJUAN = $_POST['JUMLAH'];


fputs($fp,"$Nama|$Alamat|$Username|$Password|$Email|$Tanggal_Lahir|$Umur|$No_Tlp|$Jenis_kelamin|$Agama|$JUMLAH_PENGAJUAN\n");
fclose($fp);
echo "<center><br>";
echo '<h1 class="h1">Terima Kasih telah mengisi data registrasi</h1><br>';
echo "&nbsp";
echo '<a class="tombol" href=menampilkan_data.php>Home</a>';
echo "</center>";

?>
</div>
</body>
</html>