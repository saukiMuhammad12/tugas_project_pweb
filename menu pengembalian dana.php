<?php 
    
    $filecounter="counter.txt";
    $fl=fopen($filecounter,"r+");


    $hit=fread($fl,filesize($filecounter));


    echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#000000><tr>");
    echo ("<td width=250 valign=middle align=center>");
    echo ("<font face=verdaba size=2 color=#000000><b>");
    echo ("Anda pengunjung yang ke :");
    echo ($hit);
    echo ("</b></font>");
    echo ("</td>");
    echo ("</tr></table>");

    fclose($fl);


    $fl=fopen($filecounter,"w+");


    $hit=$hit+1;


    fwrite($fl,$hit,strlen($hit));


    fclose($fl);

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi pengembalian dana </title>
</head>
<body>
    <form action="proses_pembayaran.php" method="POST">
        <fieldset>
        <legend>REGISTRASI PENGEMBALIAN DANA (KUD)</legend>
        <link rel="stylesheet" type="text/css" href="Sauki.css">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="Alamat" placeholder="Alamat anda..." />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Passowrd..." />
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="email..." />
        <p>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal" />
        </p>
        <p>
            <label>Umur:</label>
            <input type="number" min="10" max="90" name="umur" />
        </p>
        <p>
            <label>No.Tlp:</label>
            <input type="contact" name="tlpn" placeholder="no tlpn..." />
        </p>
        <p>
            <label>Jenis_kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
            <label>JUMLAH PENGEMBALIAN:</label>
            <input type="text" name="pengembalian" placeholder="jumlah..." />
        </p>
        <p>
            <label>JUMLAH ANGSURAN PERBULAN:</label>
            <select name="JUMLAH">
                <option value="34.000">Rp34.000/bulan_jumlah_pinjaman_1jt</option>
                <option value="67.000">Rp67.000/bulan_jumlah_pinjaman_2jt</option>
                <option value="100.000">Rp100.000/bulan_jumlah_pinjaman_3jt</option>
                <option value="134.000">Rp134.000/bulan_jumlah_pinjaman_4jt</option>
                <option value="167.000">Rp167.000/bulan_jumlah_pinjaman_5jt</option>
                <option value="200.000">Rp200.000/bulan_jumlah_pinjaman_6jt</option>
                <option value="234.000">Rp234.000/bulan_jumlah_pinjaman_7jt</option>
                <option value="267.000">Rp267.000/bulan_jumlah_pinjaman_8jt</option>
                <option value="300.000">Rp300.000/bulan_jumlah_pinjaman_9jt</option>
                <option value="334.000">Rp334.000/bulan_jumlah_pinjaman_10jt</option>

            </select>
        </p>
        <p>
            <label>MODEL PENGEMBALIAN DANA:</label>
            <select name="PENGEMBALIAN">
                <option value="DEBIT">DEBIT</option>
                <option value="KREDIT">KREDIT</option>
            </select>
        </p>
         <p>
            <input type="file" name="foto" accept="image/*" id="abc" class="def">
        </p>
        <p>
            <input type="submit" name="submit" value="Bayar" />
        </p>
        </fieldset>
        <div id="runningtext">
        <marquee bahavior="scroll" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" direction="right"> 
            selamat datang di web Peminjaman berbasis(KUD)online kami, jika ingin bertanya tanya bisa menghubungi(0823-4627-4922) sebagai penangung jawab (Muh.Nur Sauki Sahid),tunggu info di email anda untuk kode pembayaran jika anda ingin membayar sertakan bukti foto pembayaran anda.!!!
        </marquee>
    </div>
    </form>
</body>
</html>