<?php
// array multidimensi adalah array di dalam array
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 1800,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 500,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];
// inisialisasi
$price = 0;

echo "Daftar belanjaan : </br>";
echo "<ol>";
// order list

// iterasi (perulangan beurutan) melalui setiap item dalam array $barang
foreach ($barang as $item) {
    // menghitung harga subtotal untuk item
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // menampilkan nama barang, jumlah yang dibeli, harga subtotal dalam bentuk format
    echo "<li> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subPrice, 0,',',',');
    //number format kode tersebut untuk memformat angka tanpa menampilkan desimal dan menambahkan pemisah ribuan menggunakan koma.
    // menambahkan harga subtotal ke total harga
    $price += $subPrice;
}

echo "</ol>";
echo "<br>";

echo "Total harga yang harus dibayar adalah <b> Rp. " . number_format($price, 0,'.','.') . "</b>";
//number format kode tersebut untuk memformat angka tanpa menampilkan desimal dan menambahkan pemisah ribuan menggunakan koma.
?>