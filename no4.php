<?php
// buatlah tanda persegi dengan simbol bintang sebanyak 4 baris dengan banyak bintang perbarisnya 
for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < 8; $j++) {
        if ($i % 5 == 0) {
            echo "";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}
// $i untuk baris ke bawah
// $j untuk baris ke samping
//pengkondisian $i modulus 5 = 0 tidak akan muncul apapun, jika tidak = 0 akan keluar *
?>