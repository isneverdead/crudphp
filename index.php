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
            <button type="button" class="btn btn-primary mx-2">Beranda</button>
        </a>
        <a href="./data_mahasiswa.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Mahasiswa</button>
        </a>
        <a href="./data_dosen.php">
            <button type="button" class="btn btn-outline-primary mx-2">Data Dosen</button>
        </a>
    </div>

    <div class="user-photo-container row justify-content-center">
        <div class="user-photo justify-content-center overflow-hidden">
            <img src="./kendall.jpg" alt="foto profil">
            <!-- <img src="./fotoku.jpg" alt="foto profil"> -->
        </div>
    </div>


    <div class="content row justify-content-center">
        <p class="col-10 col-sm-8 col-md-8 col-lg-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat facere sit ipsum amet sunt dolorem labore ducimus numquam vero dignissimos!</p>
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