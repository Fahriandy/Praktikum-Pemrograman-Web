<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Pecahan Uang</h1>
    <?php
    // 1. Definisikan array pecahan uang yang berlaku (nilai harus diurutkan dari terbesar)
    $pecahan = [100000, 50000, 20000, 5000, 100, 50];

    // 2. Baca input dari formulir dan bersihkan dari format non-angka (jika ada)
    $jumlah = str_replace('.', '', $_POST['jumlah']); // Hilangkan titik ribuan jika dimasukkan
    $jumlah = (int) $jumlah; // Pastikan input adalah integer (bilangan bulat)

    $sisa = $jumlah; // Variabel ini akan menyimpan sisa uang yang belum dipecah
    
    // Tampilkan jumlah uang yang akan dipecah
    echo "<h2>Jumlah Uang yang Diambil: Rp. " . number_format($jumlah, 0, ',', '.') . "</h2>";
    echo "<table>";
    echo "<tr><th>Pecahan</th><th>Jumlah Lembar</th></tr>";

    // 3. Looping untuk menghitung jumlah setiap pecahan
    foreach ($pecahan as $nilai) {
        // Hitung berapa lembar pecahan yang bisa didapat
        $jumlah_lembar = floor($sisa / $nilai); // floor() memastikan hasil adalah bilangan bulat

        // Tampilkan hasilnya
        echo "<tr>";
        echo "<td>Rp. " . number_format($nilai, 0, ',', '.') . "</td>";
        echo "<td>" . $jumlah_lembar . " lembar</td>";
        echo "</tr>";

        // Perbarui sisa uang yang belum dipecah menggunakan operator modulo (%)
        $sisa = $sisa % $nilai; 
    }
    
    echo "</table>";
    
    // Tampilkan sisa akhir (jika ada)
    if ($sisa > 0) {
        echo "<p style='color: red; margin-top: 15px;'>**Sisa uang yang tidak bisa dipecah:** Rp. " . $sisa . "</p>";
    } else {
        echo "<p style='margin-top: 15px;'>Semua uang telah dipecah habis.</p>";
    }
    ?>
</body>
</html>