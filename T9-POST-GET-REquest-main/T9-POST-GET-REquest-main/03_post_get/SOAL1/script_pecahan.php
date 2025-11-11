<html>
<head>
    <title>Hitung Pecahan Uang</title>
</head>
<body>
    <h1>Hitung Pecahan Uang</h1>
    <p>Masukkan jumlah uang yang ingin diambil untuk dihitung pecahannya.</p>

    <form method="post" action="script_pecahan_proses.php">
        <table>
            <tr>
                <td>Jumlah Uang (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="jumlah" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Hitung Pecahan">
        <input type="reset" name="reset" value="Hapus Input">
    </form>
</body>
</html>