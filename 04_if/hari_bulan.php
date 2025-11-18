<!doctype html>
<html>
<head><meta charset="utf-8"><title>Pilih Bulan & Tahun</title></head>
<body>
<h2>Pilih Bulan & Tahun</h2>
<form method="post" action="hari_bulan_proses.php">
    Bulan:
    <select name="bulan">
        <option value="">(Gunakan bulan sekarang)</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
    Tahun: <input type="text" name="tahun" placeholder="kosong = tahun sekarang">
    <br><br>
    <input type="submit" value="Tampilkan Jumlah Hari">
</form>
</body>
</html>
