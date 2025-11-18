<?php
// Ambil input; jika kosong gunakan nilai sekarang
$bulan = isset($_POST['bulan']) && $_POST['bulan'] !== "" ? intval($_POST['bulan']) : intval(date("n"));
$tahun = isset($_POST['tahun']) && trim($_POST['tahun']) !== "" ? intval($_POST['tahun']) : intval(date("Y"));

// Cek kabisat
$isKabisat = (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0));

switch ($bulan) {
    case 1: $nama = "Januari"; $hari = 31; break;
    case 2: $nama = "Februari"; $hari = $isKabisat ? 29 : 28; break;
    case 3: $nama = "Maret"; $hari = 31; break;
    case 4: $nama = "April"; $hari = 30; break;
    case 5: $nama = "Mei"; $hari = 31; break;
    case 6: $nama = "Juni"; $hari = 30; break;
    case 7: $nama = "Juli"; $hari = 31; break;
    case 8: $nama = "Agustus"; $hari = 31; break;
    case 9: $nama = "September"; $hari = 30; break;
    case 10: $nama = "Oktober"; $hari = 31; break;
    case 11: $nama = "November"; $hari = 30; break;
    case 12: $nama = "Desember"; $hari = 31; break;
    default: $nama = "Tidak diketahui"; $hari = 0; break;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Hasil Jumlah Hari</title></head>
<body>
<h2>Hasil</h2>
<p>Bulan: <?= htmlspecialchars($nama) ?> (<?= $bulan ?>)</p>
<p>Tahun: <?= $tahun ?> <?= $isKabisat ? "(kabisat)" : "" ?></p>
<p>Jumlah hari: <?= $hari ?></p>
<p><a href="hari_bulan.php">Kembali</a></p>
</body>
</html>
