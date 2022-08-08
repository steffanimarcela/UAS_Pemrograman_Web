<?php

if (isset($_POST['submit'])) {
    $tiperumah = $_POST['tiperumah'];
    $lamakredit = $_POST['lamakredit'];
    if ($tiperumah == "ALAMANDA") {
        $hargarumah = 120000000;
    } else {
        $hargarumah = 130000000;
    }

    $uangmuka = $hargarumah * 20 / 100;
    $sisa = $hargarumah - $uangmuka;
    $angsuran = $sisa / $lamakredit;
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
    <title>Program Kredit Rumah</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">Program penjualan Barang Elektronik</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <div class="card mt-5 p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">Form Pembelian</h5>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label for="tiperumah">Tipe Rumah</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <select class="form-select" name="tiperumah" id="tiperumah">
                                    <option value="ALAMANDA">ALAMANDA</option>
                                    <option value="MAWAR">MAWAR</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label for="lamakredit">Lama Kredit</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <select class="form-select" name="lamakredit" id="lamakredit">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                </select>

                            </div>

                            <input type="submit" class="form-control btn btn-warning mb-2 mt-4 text-light" onclick="alert('Pastikan data yang diinput sudah benar!')" name="submit" id="submit" value="PROSES">
                            <button type="reset" class="form-control btn btn-danger">RESET</button>
                        </div>
                    </form>
                </div>
            </div>

            <?php if (isset($_POST['submit'])) { ?>
                <div class="card mt-5 p-3 mb-5">
                    <div class="card-body">
                        <h5 class="card-title mb-5">Perhitungan</h5>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label>Tipe Rumah</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $tiperumah ?>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label>Harga Rumah</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $hargarumah ?>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label>Uang Muka</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $uangmuka ?>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label>Sisa</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $sisa ?>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label>Lama Kredit</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $lamakredit ?>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label>Angsuran</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <?= $angsuran ?>
                            </div>

                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Bulan</th>
                                    <th>Angsuran</th>
                                    <th>Sisa</th>
                                </tr>
                                <?php
                                $no = 1;
                                while ($no <= $lamakredit) {
                                ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $angsuran ?></td>
                                        <td><?= (int) $sisa -= $angsuran ?></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <a href="index.php" onclick="alert('Konfirmasi!')" class="btn btn-warning text-light">Reset</a>
                </div>
            <?php } ?>
        </center>
    </div>
</body>

</html>