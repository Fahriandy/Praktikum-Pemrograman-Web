<html>
<head>
    <title>Hitung Saldo Akhir Tabungan</title>
</head>
<body>
    <h1>Hitung Saldo Akhir Tabungan</h1>
    <p>Masukkan data tabungan untuk menghitung saldo akhir.</p>

    <form method="post" action="script_bank_proses.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal" required></td>
            </tr>
            <tr>
                <td>Bunga Per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga" required></td>
            </tr>
            <tr>
                <td>Lama Menabung (Bulan)</td>
                <td>:</td>
                <td><input type="text" name="lama_bulan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Saldo Akhir">
        <input type="reset" name="reset" value="Hapus Input">
    </form>
</body>
</html>