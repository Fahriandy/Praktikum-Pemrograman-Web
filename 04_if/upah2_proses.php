<?php
$jam = floatval($_POST['jam']);
$gol = $_POST['golongan'];

switch ($gol) {
    case "A": $tarif = 4000; break;
    case "B": $tarif = 5000; break;
    case "C": $tarif = 6000; break;
    case "D": $tarif = 7500; break;
    default: $tarif = 0; break;
}

$tarif_lembur = 3000;
$normal_jam = 48;

if ($jam > $normal_jam) {
    $lembur = $jam - $normal_jam;
    $upah = ($normal_jam * $tarif) + ($lembur * $tarif_lembur);
} else {
    $lembur = 0;
    $upah = $jam * $tarif;
}

echo "<p>Golongan: ".$gol."</p>";
echo "<p>Tarif per jam: Rp ".number_format($tarif,0,',','.')."</p>";
echo "<p>Jam kerja: ".$jam." jam</p>";
echo "<p>Jam lembur: ".$lembur." jam</p>";
echo "<p>Total upah: Rp ".number_format($upah,0,',','.')."</p>";
?>