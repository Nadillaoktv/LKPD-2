<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima Checker</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bilangan Prima Checker</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="angka">Masukkan Bilangan:</label>
                        <input type="text" id="angka" name="angka" class="form-control" placeholder="Masukkan bilangan">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                <div class="mt-3">
                    <?php
                    // PHP Script to process the form
                    $angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
                    $hasil = '';

                    function bilPrima($a) {
                        if ($a <= 1) return false;
                        for ($b = 2; $b <= sqrt($a); $b++) {
                            if ($a % $b == 0) return false;
                        }
                        return true;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (is_numeric($angka)) {
                            if (bilPrima($angka)) {
                                $hasil = "$angka adalah bilangan prima";
                            } else {
                                $hasil = "$angka bukan bilangan prima";
                            }
                        } else {
                            $hasil = "Harap masukkan angka yang valid";
                        }
                    }

                    if ($hasil) {
                        echo '<div class="alert alert-info" role="alert">' . $hasil . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>