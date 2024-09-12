<?php
$teks = "Selamat ulang tahun yang ke-17 Nadila Oktaviana Putri";
$karakterDicari = 'a';

$kata = substr_count($teks, $karakterDicari);
echo "Karakter " . $karakterDicari . " muncul sebanyak " . substr_count($teks, $karakterDicari) . " kali dalam kalimat";
?>