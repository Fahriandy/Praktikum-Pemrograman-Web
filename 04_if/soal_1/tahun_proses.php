<?php
$tahun = intval($_POST['tahun']);

if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    echo "<p>Tahun ".$tahun." adalah <strong>kabisat</strong>.</p>";
} else {
    echo "<p>Tahun ".$tahun." <strong>bukan</strong> tahun kabisat.</p>";
}
?>