<?php
$teks = "Selamat ulang tahun yang ke-17!";

// mencari semua simbol (karakter ynag bukan huruf atau angka)
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);
// ('/[^a-zA-Z0-9\s]/' string pattern

// fungsi count untuk menghitung jumlah elemen dalam array
if (count($matches[0]) > 0) {
    // array unique menghilangkcan dumplikasi simbol
    $uniqueSymbols = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : " . implode(', ', $uniqueSymbols);
    // impload digunakan untuk menggabungkan elemen-elemen array menjadi sebuah string dengan pemisah tertentu.
    // menggabungkan semua elemen array
} else {
    echo "Tidak terdapat simbol pada kalimat";
}
?>