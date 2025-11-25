<?php

echo "<h2>Daftar Kombinasi x + y + z = 25</h2>";

$jumlah = 0;

for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 23; $y++) {
        for ($z = 1; $z <= 23; $z++) {

            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z <br>";
                $jumlah++;
            }

        }
    }
}

echo "<h3>Total kombinasi = $jumlah</h3>";

?>
