

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center">HITUNG TOTAL KARAKTER</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="teks">KALIMAT</label>
                        <input type="text" id="text" name="text" class="form-control" placeholder="Masukkan kalimat">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
</div>  
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $string = isset($_POST['text']) ? $_POST['text'] : '';

    $gaSpacsi = str_replace(' ','',$string);
    $str = strlen($gaSpacsi);
    echo "Total Karakter : " . $str;
}
?>
</body>
</html>