<?php


$hasil = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operasi = isset($_POST['operasi']) ? $_POST['operasi'] :  " ";

if (is_numeric($angka1) && is_numeric($angka2)) {
    switch ($operasi) {
        case "tambah":
            $hasil = $angka1 + $angka2;
            break;
        case "kurang":
            $hasil = $angka1 - $angka2;
            break;
        case "kali":
            $hasil = $angka1 * $angka2;
            break;
        case "bagi":
            $hasil = $angka1 / $angka2;
            break;
        default:
            break;
      }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulator</h1>
    
    <form action="" method="POST">
        <input type="number" name="angka1">
        <input type="number" name="angka2">
    <select id="kalkulator" class="kalkulator" name="operasi">
        <option value="">Pilih Operator</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select>
        <button type="submit">kirim</button>
     </form>   

     <?php  echo "<h1>Hasil: $hasil</h1>"; ?>
</body>
</html>