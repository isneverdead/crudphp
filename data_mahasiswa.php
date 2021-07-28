<?php
include_once("config.php");

$all_mahasiswa = mysqli_query($mysqli, "SELECT * FROM 73_mahasiswa ORDER BY id ASC");
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

    <div class="">
        <div class="tab-content">
            <a href="./index.php">
                <button type="button" class="btn btn-outline-primary mx-2">Beranda</button>
            </a>
            <a href="./data_mahasiswa.php">
                <button type="button" class="btn btn-primary mx-2">Data Mahasiswa</button>
            </a>
            <a href="./data_dosen.php">
                <button type="button" class="btn btn-outline-primary mx-2">Data Dosen</button>
            </a>
        </div>

        <div class="page-title">
            <h1>DATA MAHASISWA</h1>
        </div>

        <div class="page-section-button">
            <a href="./add_mahasiswa.php">
                <button type="button" class="btn btn-primary mx-2">Tambah Data</button>
            </a>
            <a href="./cetak_mahasiswa.php">

                <button type="button" class="btn btn-primary mx-2">Cetak data</button>
            </a>
        </div>

        <div class="table-content">
            <table class="table table-bordered border-dark">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($mahasiswa = mysqli_fetch_array($all_mahasiswa)) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $no++ . "</th>";
                        echo "<td>" . $mahasiswa['nim'] . "</td>";
                        echo "<td>" . $mahasiswa['nama'] . "</td>";
                        echo "<td>" . $mahasiswa['jenis_kelamin'] . "</td>";
                        echo "<td>" . $mahasiswa['progdi'] . "</td>";
                    ?>
                        <td><a href='./edit_mahasiswa.php?id=<?= $mahasiswa['id'] ?>'>

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.6754 4.83277L20.1672 7.32338L17.6754 4.83277ZM19.2778 2.63863L12.5401 9.37634C12.192 9.72399 11.9545 10.1669 11.8577 10.6493L11.2354 13.7646L14.3507 13.1411C14.8331 13.0446 15.2754 12.8081 15.6237 12.4599L22.3614 5.72219C22.5638 5.51972 22.7245 5.27935 22.834 5.01481C22.9436 4.75027 23 4.46674 23 4.18041C23 3.89407 22.9436 3.61054 22.834 3.346C22.7245 3.08146 22.5638 2.8411 22.3614 2.63863C22.1589 2.43616 21.9185 2.27555 21.654 2.16597C21.3895 2.0564 21.1059 2 20.8196 2C20.5333 2 20.2497 2.0564 19.9852 2.16597C19.7207 2.27555 19.4803 2.43616 19.2778 2.63863V2.63863Z" stroke="#00FFA3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.6472 16.1176V19.647C20.6472 20.2711 20.3993 20.8696 19.9581 21.3108C19.5168 21.7521 18.9183 22 18.2943 22H5.35297C4.72892 22 4.13043 21.7521 3.68917 21.3108C3.2479 20.8696 3 20.2711 3 19.647V6.70573C3 6.08168 3.2479 5.48319 3.68917 5.04193C4.13043 4.60066 4.72892 4.35276 5.35297 4.35276H8.88241" stroke="#00FFA3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </a> | <a href='delete.php?jenis=mahasiswa&id=<?= $mahasiswa['id'] ?>'>

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M3.75 1.5C3.35218 1.5 2.97064 1.65804 2.68934 1.93934C2.40804 2.22064 2.25 2.60218 2.25 3V4.5C2.25 4.89782 2.40804 5.27936 2.68934 5.56066C2.97064 5.84196 3.35218 6 3.75 6H4.5V19.5C4.5 20.2956 4.81607 21.0587 5.37868 21.6213C5.94129 22.1839 6.70435 22.5 7.5 22.5H16.5C17.2956 22.5 18.0587 22.1839 18.6213 21.6213C19.1839 21.0587 19.5 20.2956 19.5 19.5V6H20.25C20.6478 6 21.0294 5.84196 21.3107 5.56066C21.592 5.27936 21.75 4.89782 21.75 4.5V3C21.75 2.60218 21.592 2.22064 21.3107 1.93934C21.0294 1.65804 20.6478 1.5 20.25 1.5H15C15 1.10218 14.842 0.720644 14.5607 0.43934C14.2794 0.158035 13.8978 0 13.5 0L10.5 0C10.1022 0 9.72064 0.158035 9.43934 0.43934C9.15804 0.720644 9 1.10218 9 1.5H3.75ZM8.25 7.5C8.44891 7.5 8.63968 7.57902 8.78033 7.71967C8.92098 7.86032 9 8.05109 9 8.25V18.75C9 18.9489 8.92098 19.1397 8.78033 19.2803C8.63968 19.421 8.44891 19.5 8.25 19.5C8.05109 19.5 7.86032 19.421 7.71967 19.2803C7.57902 19.1397 7.5 18.9489 7.5 18.75V8.25C7.5 8.05109 7.57902 7.86032 7.71967 7.71967C7.86032 7.57902 8.05109 7.5 8.25 7.5V7.5ZM12 7.5C12.1989 7.5 12.3897 7.57902 12.5303 7.71967C12.671 7.86032 12.75 8.05109 12.75 8.25V18.75C12.75 18.9489 12.671 19.1397 12.5303 19.2803C12.3897 19.421 12.1989 19.5 12 19.5C11.8011 19.5 11.6103 19.421 11.4697 19.2803C11.329 19.1397 11.25 18.9489 11.25 18.75V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5V7.5ZM16.5 8.25V18.75C16.5 18.9489 16.421 19.1397 16.2803 19.2803C16.1397 19.421 15.9489 19.5 15.75 19.5C15.5511 19.5 15.3603 19.421 15.2197 19.2803C15.079 19.1397 15 18.9489 15 18.75V8.25C15 8.05109 15.079 7.86032 15.2197 7.71967C15.3603 7.57902 15.5511 7.5 15.75 7.5C15.9489 7.5 16.1397 7.57902 16.2803 7.71967C16.421 7.86032 16.5 8.05109 16.5 8.25V8.25Z" fill="#FF4545" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </a></td>
                        </tr>
                    <?php

                    }
                    ?>

                </tbody>
            </table>

        </div>

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