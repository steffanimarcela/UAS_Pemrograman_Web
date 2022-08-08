<?php

if (isset($_POST['submit'])) {
    $namapelanggan = $_POST['namapelanggan'];
    $kategori = $_POST['kategori'];
    $jumlahpemakaian = $_POST['jumlahpemakaian'];

    if ($kategori == "SOSIAL") {
        $abodemen = 10000;
        $tarif = 300;
        $pajak = 0 / 100;
    } else if ($kategori == "RUMAH") {
        $abodemen = 30000;
        $tarif = 500;
        $pajak = 10 / 100;
    } else {
        $abodemen = 50000;
        $tarif = 1000;
        $pajak = 30 / 100;
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
    <title>PLN Bandung</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">PLN Bandung</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <div class="card mt-5 p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">Menghitung Tagihan Listrik</h5>
                    <form action="" method="POST">
                        <table class="table table-bordered">
                            <tr>
                                <th>
                                    <label for="namapelanggan">Nama Pelanggan</label>
                                </th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Nama Pelanggan" id="namapelanggan" name="namapelanggan" required autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="kategori">Kategori</label>
                                </th>
                                <td>
                                    <select class="form-select" name="kategori" id="kategori">
                                        <option value="SOSIAL">SOSIAL</option>
                                        <option value="RUMAH">RUMAH</option>
                                        <option value="INDUSTRI">INDUSTRI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="jumlahpemakaian">Jumlah Pemakaian Listrik</label>
                                </th>
                                <td>
                                    <input type="number" class="form-control" placeholder="Jumlah Pemakaian Listrik" id="jumlahpemakaian" name="jumlahpemakaian" required autocomplete="off">
                                </td>
                            </tr>
                        </table>

                        <input type="submit" class="form-control btn btn-warning mb-2 mt-4 text-light" onclick="alert('Pastikan data yang diinput sudah benar!')" name="submit" id="submit" value="PROSES">
                        <button type="reset" class="form-control btn btn-danger">RESET</button>

                    </form>
                </div>
            </div>

            <?php if (isset($_POST['submit'])) { ?>
                <div class="card mt-5 p-3 mb-5">
                    <div class="card-body">
                        <h5 class="card-title mb-5">Tagihan Listrik</h5>
                        <table class="table table-bordered table-striped table-warning">
                            <tr>
                                <th>Nama Pelanggan</th>
                                <td><?= $namapelanggan ?></td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td><?= $kategori ?></td>
                            </tr>
                            <tr>
                                <th>Jumlah Pemakaian</th>
                                <td><?= $jumlahpemakaian ?></td>
                            </tr>
                        </table>

                        <h5 class="card-title mb-5 mt-5">Rincian Tagihan</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Jumlah</th>
                                <th>Tarif Per KWH</th>
                                <th>Abodemen</th>
                                <th>Subtotal</th>
                            </tr>
                            <?php
                            $no = 1;
                            $tariff = $tarif;
                            $abodemenn = $abodemen;
                            while ($no <= $jumlahpemakaian) {
                                $subtotal = $abodemenn + $tariff;
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tariff  ?></td>
                                    <td><?= $abodemenn ?></td>
                                    <td><?= $subtotal ?></td>
                                </tr>
                            <?php
                                $tariff += $tarif;
                            } ?>
                            <tr>
                                <th colspan="3">
                                    Subtotal
                                </th>
                                <th><?= $subtotal ?></th>
                            </tr>
                            <tr>
                                <th colspan="3">
                                    Pajak
                                </th>
                                <th><?= $subtotal * $pajak ?></th>
                            </tr>
                            <tr>
                                <th colspan="3">
                                    Bayar
                                </th>
                                <th><?= $subtotal + ($subtotal * $pajak) ?></th>
                            </tr>

                        </table>

                        <a href="index.php" onclick="alert('Konfirmasi!')" class="btn btn-warning text-light">Reset</a>
                    </div>
                </div>
            <?php } ?>
        </center>
    </div>
</body>


</html>