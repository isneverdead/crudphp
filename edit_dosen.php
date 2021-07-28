<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nppy = $_POST['nppy'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $result = mysqli_query($mysqli, "UPDATE `73_dosen` SET `nppy` = '$nppy', `nama` = '$nama', `nomor_hp` = '$nomor_hp', `nomor_hp` = '$nomor_hp', `alamat` = '$alamat', `mata_kuliah` = '$mata_kuliah' WHERE `73_dosen`.`id` = $id;");
    var_dump($result);
    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Dosen gagal diedit");';
        echo '</script>';
    } else {
        header("Location: ./data_dosen.php");
    }
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM 73_dosen WHERE id=$id");

while ($dosen = mysqli_fetch_array($result)) {
    $id = $dosen['id'];
    $nppy = $dosen['nppy'];
    $nama = $dosen['nama'];
    $nomor_hp = $dosen['nomor_hp'];
    $alamat = $dosen['alamat'];
    $mata_kuliah = $dosen['mata_kuliah'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sistem informasi akademik</title>
</head>

<body>
    <nav class="nav-section">
        <div class="container-fluid navbar-block">
            <a class="nav-brand" href="#">Logo</a>

            <div class="nav-title">Sistem Informasi Akademik</div>
        </div>
    </nav>

    <div class="tab-content">
        <a href="./index.php">
            <button type="button" class="btn btn-outline-primary mx-2">Beranda</button>
        </a>
        <a href="./add_mahasiswa.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Mahasiswa</button>
        </a>
        <a href="./data_dosen.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Dosen</button>
        </a>
    </div>

    <div class="page-title">
        <h1>EDIT DATA DOSEN</h1>
    </div>

    <div class="form-section row justify-content-center">
        <form class="col-10 col-sm-8 col-md-8 col-lg-6" action="" method="post">
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">NPPY</p>
                </div>
                <div class="col-8">

                    <input type="text" style="display: none;" id="id" name="id" value=<?= $id ?>>
                    <input type="text" class="form-control" id="nppy" name="nppy" value=<?= $nppy ?>>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Nama Dosen</p>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="nama" name="nama" value=<?= $nama ?>>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Nomor HP</p>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value=<?= $nomor_hp ?>>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Alamat</p>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="alamat" name="alamat" value=<?= $alamat ?>>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Mata Kuliah</p>
                </div>
                <div class="col-8">
                    <select name="mata_kuliah">
                        <option value="Jaringan Komputer 1" <?= ($mata_kuliah == 'Jaringan Komputer 1') ? 'selected' : '' ?>>Jaringan Komputer 1</option>
                        <option value="Pemograman Web 1" <?= ($mata_kuliah == 'Pemograman Web 1') ? 'selected' : '' ?>>Pemograman Web 1</option>
                        <option value="Desain Grafis 1" <?= ($mata_kuliah == 'Desain Grafis 1') ? 'selected' : '' ?>>Desain Grafis 1</option>
                        <option value="Animasi 1" <?= ($mata_kuliah == 'Animasi 1') ? 'selected' : '' ?>>Animasi 1</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmSubmit">Simpan</button>
                    <!-- Modal -->
                    <div class="modal fade" id="confirmSubmit" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Pemberitahuan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakh data tersebut akan disimpan?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="update" class="btn btn-primary">Ya</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <a href="./data_dosen.php">
                        <button type="button" class="btn btn-success mx-2">Kembali</button>
                    </a>
                </div>
            </div>




        </form>
    </div>




    <footer class="footer">
        <div class="container-fluid text-center">
            <p>Copyright @ 2021 | 192300058 - Arrum Lestari</p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>