<?php 
// array yang menyimpan 8 elemen numerik(beisi angka)
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$merge = array_merge($bil1, $bil2);
// menyatukan dua array menggunakan array_marge

$unique = array_unique($merge);
// mengambil salah satu bilangan yang bersifat double/ duplikat

arsort($unique);
// arsort untuk mengurutkan bilangan dari yang terbesar sampai terkecil

echo "Hasil : ";

echo implode(', ', $unique);
?>           