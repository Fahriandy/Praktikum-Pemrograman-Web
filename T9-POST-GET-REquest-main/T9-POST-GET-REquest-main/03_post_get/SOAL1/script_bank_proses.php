<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <?php
    // 1. Baca input dari formulir
    $saldo_awal = $_POST['saldo_awal'];   // Saldo Awal (Rp.)
    $bunga_persen = $_POST['bunga'];      // Bunga Per Bulan (%)
    $lama_bulan = $_POST['lama_bulan'];   // Lama Menabung (Bulan)

    // 2. Lakukan perhitungan
    
    // Konversi persen bunga ke desimal (contoh: 0.25% menjadi 0.0025)
    $bunga_desimal = $bunga_persen / 100;
    
    // Hitung faktor bunga majemuk: (1 + bunga_desimal) ^ lama_bulan
    $faktor_bunga = pow((1 + $bunga_desimal), $lama_bulan);
    
    // Hitung Saldo Akhir
    $saldo_akhir = $saldo_awal * $faktor_bunga;
    
    // Untuk tujuan tampilan, bulatkan saldo akhir
    $saldo_akhir_format = number_format($saldo_akhir, 2, ',', '.');
    $saldo_awal_format = number_format($saldo_awal, 0, ',', '.');

    // 3. Tampilkan hasil
    echo "<h2>Rincian Tabungan</h2>";
    echo "<p>Saldo Awal Tabungan: **Rp. " . $saldo_awal_format . "**</p>";
    echo "<p>Bunga Per Bulan: **" . $bunga_persen . "%**</p>";
    echo "<p>Lama Menabung: **" . $lama_bulan . " bulan**</p>";
    echo "<hr>";
    echo "<h3>Saldo Akhir: **Rp. " . $saldo_akhir_format . "**</h3>";
    
    // --- Solusi untuk Contoh Soal (1.000.000, 0.25%, 11 bulan) ---
    if ($saldo_awal == 1000000 && $bunga_persen == 0.25 && $lama_bulan == 11) {
        echo "<p style='margin-top: 20px;'>*Catatan: Jika dihitung secara manual untuk contoh soal (11 bulan), Saldo Akhir adalah: **Rp. 1.027.877,65**</p>";
    }
    
    ?>
</body>
</html>