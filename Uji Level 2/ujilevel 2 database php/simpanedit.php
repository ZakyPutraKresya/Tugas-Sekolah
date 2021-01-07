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

//update data ke dalam database berdasarkan ID
$query = "UPDATE produk SET nama_produk = '$nama_produk', harga_produk = '$harga_produk', satuan = '$satuan', kategori = '$kategori', urlimage = '$urlimage', stok = '$stok' WHERE kode_produk = '$kode_produk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connect->query($query)) {
    //jika berhasil langsung dialihkan ke halaman tampilproduct.php 
    header("location: tampilproduct.php");
} else {
    //pesan error jika gagal update data
    echo "Yah Data Gagal Diupdate Nih";
}

?>