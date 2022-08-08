<?php

if (isset($_POST['submit'])) {
    $merk = $_POST["merk"];
    $pembayaran = $_POST['pembayaran'];

    if (!empty($_POST['aksesoris1'])) {
        $aks1 = 450000;
    } else {
        $aks1 = 0;
    }

    if (!empty($_POST['aksesoris2'])) {
        $aks2 = 250000;
    } else {
        $aks2 = 0;
    }

    if (!empty($_POST['aksesoris3'])) {
        $aks3 = 300000;
    } else {
        $aks3 = 0;
    }

    if ($merk == "HONDA") {
        $hargamotor = 15000000;
    } else if ($merk == "YAMAHA") {
        $hargamotor = 14000000;
    } else {
        $hargamotor = 13000000;
    }

    $harga = $aks1 + $aks2 + $aks3 + $hargamotor;

    if ($pembayaran == "Tunai") {
        $bd = $harga * 10 / 100;
        $total = $harga - $bd;
    } else {
        $bd = $harga * 15 / 100;
        $total = $harga - $bd;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <title>Penjualan Motor</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">Penjualan Motor</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <div class="card mt-5 p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">Menghitung Tagihan Listrik</h5>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-4 mt-3">
                                <label for="merk">Merk Motor</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <select class="form-select" name="merk" id="merk">
                                    <option value="HONDA">HONDA</option>
                                    <option value="YAMAHA">YAMAHA</option>
                                    <option value="SUZUKI">SUZUKI</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="">Aksesoris</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input class="form-check-input" name="aksesoris1" id="aksesoris1" value="Velg" type="checkbox">
                                <label class="form-check-label" for="aksesoris1">
                                    Velg Racing
                                </label>

                                <br>

                                <input class="form-check-input" name="aksesoris2" id="aksesoris2" value="Helm" type="checkbox">
                                <label class="form-check-label" for="aksesoris2">
                                    Helm
                                </label>

                                <br>

                                <input class="form-check-input" name="aksesoris3" id="aksesoris3" value="Jaket" type="checkbox">
                                <label class="form-check-label" for="aksesoris3">
                                    Jaket
                                </label>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="pembayaran">Cara Pembayaran</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="Tunai" required>
                                <label class="form-check-label" for="pembayaran">
                                    Tunai
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="Kredit" required>
                                <label class="form-check-label" for="pembayaran">
                                    Kredit
                                </label>
                            </div>

                        </div>

                        <input type="submit" class="form-control btn btn-primary mb-2 mt-4 text-light" onclick="alert('Pastikan data yang diinput sudah benar!')" name="submit" id="submit" value="PROSES">
                        <button type="reset" class="form-control btn btn-danger">RESET</button>

                    </form>
                </div>
            </div>

            <?php if (isset($_POST['submit'])) { ?>
                <div class="card mt-5 p-3 mb-5">
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-primary">
                            <tr>
                                <th>Harga</th>
                                <td><?= $harga ?></td>
                            </tr>
                            <tr>
                                <th>Bunga/Diskon</th>
                                <td><?= $bd ?></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td><?= $total ?></td>
                            </tr>
                        </table>

                        <a href="index.php" onclick="alert('Konfirmasi!')" class="btn btn-primary text-light">Reset</a>
                    </div>
                </div>
            <?php } ?>
        </center>
    </div>
</body>


</html>