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

    <div class="">
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
            <h1>TAMBAH DATA MAHASISWA</h1>
        </div>

        <div class="form-section row justify-content-center">
            <form class="col-10 col-sm-8 col-md-8 col-lg-6" action="./add_mahasiswa.php" method="post">
                <div class="row mb-3">
                    <div class="col-4 d-flex flex-row justify-content-end">
                        <p class="my-auto mx-3 form-input-name">NIM</p>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nim" name="nim" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 d-flex flex-row justify-content-end">
                        <p class="my-auto mx-3 form-input-name">Nama Mahasiswa</p>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 d-flex flex-row justify-content-end">
                        <p class="my-auto mx-3 form-input-name">Jenis Kelamin</p>
                    </div>
                    <div class="col-8">
                        <input class="form-check-input" value="Laki-laki" type="radio" name="jenis_kelamin_mahasiswa" id="jenis_kelamin_mahasiswa">
                        <label class="form-check-label" for="jenis_kelamin_mahasiswa">
                            Laki-laki
                        </label>
                        <input class="form-check-input mx-2" value="Perempuan" type="radio" name="jenis_kelamin_mahasiswa" id="jenis_kelamin_mahasiswa">
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
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
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
                                        <button type="submit" name="submit" class="btn btn-primary">Ya</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">

                    </div>
                </div>




            </form>
        </div>
    </div>

    <?php


    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $jenis_kelamin_mahasiswa = $_POST['jenis_kelamin_mahasiswa'];
        $progdi_mahasiswa = $_POST['progdi_mahasiswa'];

        include_once("./config.php");

        $result = mysqli_query($mysqli, "INSERT INTO `73_mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `progdi`) VALUES (NULL, '$nim', '$nama_mahasiswa', '$jenis_kelamin_mahasiswa', '$progdi_mahasiswa')");

        echo '<script language="javascript">';
        // echo 'alert("User berhasil ditambahkan");';
        echo "window.location.href='./data_mahasiswa.php';";
        echo '</script>';
    }
    ?>


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