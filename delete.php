<?php
include_once("config.php");

$id = $_GET['id'];
$jenis = $_GET['jenis'];

if ($jenis == 'mahasiswa') {
    $result = mysqli_query($mysqli, "DELETE FROM 73_mahasiswa WHERE id=$id");
    header("Location:./data_mahasiswa.php");
} else if ($jenis == 'dosen') {
    $result = mysqli_query($mysqli, "DELETE FROM 73_dosen WHERE id=$id");
    header("Location:./data_dosen.php");
}
