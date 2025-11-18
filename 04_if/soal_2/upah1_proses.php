<?php
$jam = floatval($_POST['jam']);
$tarif = 2000;
$tarif_lembur = 3000;
$normal_jam = 48;

if ($jam > $normal_jam) {
    $lembur = $jam - $normal_jam;
    $upah = ($normal_jam * $tarif) + ($lembur * $tarif_lembur);
} else {
    $lembur = 0;
    $upah = $jam * $tarif;
}

echo "<p>Jam kerja: ".$jam." jam</p>";
echo "<p>Jam lembur: ".$lembur." jam</p>";
echo "<p>Total upah: Rp ".number_format($upah,0,',','.')."</p>";
?>