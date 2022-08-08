<?php

if (isset($_POST['submit'])) {
    $namabarang = $_POST["namabarang"];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];

    if ($namabarang == "Monitor") {
        $hargabarang = 300000;
    } else if ($namabarang == "Keyboard") {
        $hargabarang = 200000;
    } else {
        $hargabarang = 100000;
    }

    $total = $hargabarang * $jumlah;

    if ($status == "Pelanggan") {
        $diskon = $total * 10 / 100;
    } else {
        $diskon = 0;
    }

    $bayar = $total - $diskon;
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
    <title>Penjualan Barang</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">Penjualan Barang</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <div class="card mt-5 p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">Form Pembelian</h5>
                    <form action="" method="POST">
                        <div class="row">

                            <div class="col-lg-4 mt-3">
                                <label for="namabarang">Nama Barang</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <select class="form-select" name="namabarang" id="namabarang">
                                    <option value="Monitor">Monitor</option>
                                    <option value="Keyboard">Keyboard</option>
                                    <option value="Mouse">Mouse</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="jumlah">Jumlah</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah" required autocomplete="off">
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="status">Status</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <select class="form-select" name="status" id="status">
                                    <option value="Pelanggan">Pelanggan</option>
                                    <option value="Umum">Umum</option>
                                </select>
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
                                <td><?= $hargabarang ?></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td><?= $total ?></td>
                            </tr>
                            <tr>
                                <th>Diskon 10%</th>
                                <td><?= $diskon ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <td><?= $bayar ?></td>
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