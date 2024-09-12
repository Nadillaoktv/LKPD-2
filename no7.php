<?php
function wrapText($lorem) {
    $count = str_split($lorem);
//str_split digunakan untuk memecah string $lorem menjadi array berisi setiap karakter individu dari string tersebut.

    if (count($count) > 50) {
        // count untuk menghitung jumlah karakter dalam string $lorem.
        // Mengecek apakah jumlah karakter lebih dari 50. Jika benar, maka string akan dipotong hingga 50 karakter.
        $text = substr($lorem, 0, 50);
        // menambahkan elipsis "..." di akhir string yang sudah di potong
        // .= disebut operator konket
        $text .= "...";
    }

    echo $text;
}

$kata = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie euismod sem, eu sollicitudin neque efficitur in. Quisque mollis libero orci, id lacinia ipsum sagittis non. Fusce vel elementum ligula.";

echo "Kalimat awal : " . $kata;
wrapText($kata);
?>