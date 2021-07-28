<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin_mahasiswa'];
    $progdi = $_POST['progdi_mahasiswa'];

    $result = mysqli_query($mysqli, "UPDATE `73_mahasiswa` SET `nim` = '$nim', `nama` = '$nama', `jenis_kelamin` = '$jenis_kelamin', `progdi` = '$progdi' WHERE `73_mahasiswa`.`id` = $id;");

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Mahasiswa gagal diedit");';
        echo '</script>';
    } else {
        header("Location: ./data_mahasiswa.php");
    }
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM 73_mahasiswa WHERE id=$id");

while ($mahasiswa = mysqli_fetch_array($result)) {
    $id = $mahasiswa['id'];
    $nim = $mahasiswa['nim'];
    $nama = $mahasiswa['nama'];
    $jenis_kelamin = $mahasiswa['jenis_kelamin'];
    $progdi = $mahasiswa['progdi'];
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
        <a href="./data_mahasiswa.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Mahasiswa</button>
        </a>
        <a href="./data_dosen.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Dosen</button>
        </a>
    </div>

    <div class="page-title">
        <h1>EDIT DATA MAHASISWA</h1>
    </div>

    <div class="form-section row justify-content-center">
        <form class="col-10 col-sm-8 col-md-8 col-lg-6" action="" method="post">
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">NIM</p>
                </div>
                <div class="col-8">
                    <input type="text" style="display: none;" name="id" value="<?= $id ?>">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $nim ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Nama Mahasiswa</p>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $nama ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Jenis Kelamin</p>
                </div>
                <div class="col-8">
                    <input class="form-check-input" value="Laki-laki" type="radio" name="jenis_kelamin_mahasiswa" id="jenis_kelamin_mahasiswa" checked="<?= ($jenis_kelamin == 'Laki-laki') ? 'true' : '' ?>">
                    <label class="form-check-label" for="jenis_kelamin_mahasiswa">
                        Laki-laki
                    </label>
                    <input class="form-check-input mx-2" value="Perempuan" type="radio" name="jenis_kelamin_mahasiswa" id="jenis_kelamin_mahasiswa" checked="<?= ($jenis_kelamin == 'Perempuan') ? 'true' : '' ?>">
                    <label class="form-check-label" for="jenis_kelamin_mahasiswa">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-4 d-flex flex-row justify-content-end">
                    <p class="my-auto mx-3 form-input-name">Program Studi</p>
                </div>
                <div class="col-8">
                    <select name="progdi_mahasiswa">
                        <option <?= ($progdi == 'Sistem Informasi') ? 'selected' : '' ?> value="Sistem Informasi">Sistem Informasi</option>
                        <option <?= ($progdi == 'Teknik Informatika') ? 'selected' : '' ?> value="Teknik Informatika">Teknik Informatika</option>
                        <option <?= ($progdi == 'Manajemen Informatika') ? 'selected' : '' ?> value="Manajemen Informatika">Manajemen Informatika</option>
                        <option <?= ($progdi == 'Komputerisasi Akuntansi') ? 'selected' : '' ?> value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
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
                    <a href="./data_mahasiswa.php">
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