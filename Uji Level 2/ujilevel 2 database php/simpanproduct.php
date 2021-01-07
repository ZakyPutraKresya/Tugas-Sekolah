<?php

//koneksi database
include('koneksi.php');

//menangkap data dari form tambah product
$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk= $_POST['harga_produk'];
$satuan      = $_POST['satuan'];
$kategori    = $_POST['kategori'];
$urlimage    = $_POST['urlimage'];
$stok        = $_POST['stok'];

//masukin data ke dalam tabel database
$query = "INSERT INTO produk (kode_produk, nama_produk, harga_produk, satuan, kategori, urlimage, stok) VALUES ('$kode_produk', '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$urlimage', '$stok')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connect->query($query)) {

    //langsung dialihkan ke halaman tampilproduct.php jika berhasil
    header("location: tampilproduct.php");

} else {

    //pesan error gagal masukin data
    echo "Yah Data Gagal Disimpan Nih";

}

?>
