<?php
// Koneksi
include('koneksi.php');

$kode = $_GET['kode_produk'];
//perintah menghapus item dari suatu tabel database berdasarkan kode produk
$query = "DELETE FROM produk WHERE kode_produk = '$kode'";

mysqli_query($connect, $query);

    //jika berhasil lgsg ke halaman tampil product
    header("location: tampilproduct.php");

?>