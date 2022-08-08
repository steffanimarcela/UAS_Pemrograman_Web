<?php

if (isset($_POST['submit'])) {
    $namapegawai = $_POST["namapegawai"];
    $jamkerja = $_POST['jamkerja'];
    $upahperjam = $_POST['upahperjam'];
    $anak = $_POST['anak'];

    $gaji = $jamkerja * $upahperjam * 31;
    $tunjangananak = $anak * $gaji * 10 / 100;
    $totalgaji = $gaji + $tunjangananak;
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
    <title>PT SATU MALAM 2 CINTA</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#">PT SATU MALAM 2 CINTA</a>
        </div>
    </nav>
    <div class="container">
        <center>
            <div class="card mt-5 p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">Penggajian</h5>
                    <form action="" method="POST">
                        <div class="row">

                            <div class="col-lg-4 mt-3">
                                <label for="namapegawai">Nama Pegawai</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input type="text" class="form-control" placeholder="Nama Pegawai" name="namapegawai" id="namapegawai" required autocomplete="off">

                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="jamkerja">Jam Kerja</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input type="number" class="form-control" placeholder="Jam Kerja" name="jamkerja" id="jamkerja" required autocomplete="off">
                            </div>

                            <div class="col-lg-4 mt-3">
                                <label for="upahperjam">Upah Per Jam</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input type="number" class="form-control" placeholder="Upah Per Jam" name="upahperjam" id="upahperjam" required autocomplete="off">
                            </div>


                            <div class="col-lg-4 mt-3">
                                <label for="anak">Anak</label>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <input type="number" class="form-control" placeholder="Anak" name="anak" id="anak" required autocomplete="off">
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
                                <th>Gaji</th>
                                <td><?= $gaji ?></td>
                            </tr>
                            <tr>
                                <th>Tunjangan Anak</th>
                                <td><?= $tunjangananak ?></td>
                            </tr>
                            <tr>
                                <th>Total Gaji</th>
                                <td><?= $totalgaji ?></td>
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