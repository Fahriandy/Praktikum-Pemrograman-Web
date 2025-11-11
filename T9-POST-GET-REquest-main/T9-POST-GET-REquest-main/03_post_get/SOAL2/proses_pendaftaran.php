<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <?php
    // Ambil data dari form
    $nama          = $_POST['nama'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tgl           = $_POST['tgl'];
    $bln           = $_POST['bln'];
    $thn           = $_POST['thn'];
    $alamat        = $_POST['alamat'];
    $jk            = $_POST['jk'];
    $asal          = $_POST['asal'];
    $nilai         = $_POST['nilai'];

    // Tampilkan hasil input
    echo "<h3>Terima kasih <b>$nama</b> sudah mengisi form pendaftaran.</h3>";
    echo "<p><b>Nama Lengkap</b> : $nama<br>";
    echo "<b>Tempat Lahir</b> : $tempat_lahir<br>";
    echo "<b>Tanggal Lahir</b> : $tgl - $bln - $thn<br>";
    echo "<b>Alamat Rumah</b> : $alamat<br>";
    echo "<b>Jenis Kelamin</b> : $jk<br>";
    echo "<b>Asal Sekolah</b> : $asal<br>";
    echo "<b>Nilai UAN</b> : $nilai</p>";
    ?>
</body>
</html>
