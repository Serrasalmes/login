<?php
include('koneksi.php');

$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$query        = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "<script>alert('Data Gagal Disimpan!')</script>";
}
?> 