<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <style>
        body{
            background-image: url(https://images.wallpaperscraft.com/image/black_and_white_abstract_black_background_76384_1366x768.jpg);
        }
    </style>

    <title>Data Product</title>

</head>
<body>

<!-- Tabel Hasilnya -->
<div class="container" style="margin-top: 40px">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="text-align: center;"><b>Data Product</b></div>
            <div class="card-body">
                <a href="tambahproduct.php" class="btn btn-md btn-primary" style="margin-bottom: 20px;">[+] TAMBAH DATA</a>
                <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE PRODUK</th>
                    <th scope="col">NAMA PRODUK</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">STOK</th>
                    <th scope="col">IMAGE PRODUK</th>
                    <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                $no = 1;
                $sql = "SELECT * FROM produk";
                $query = mysqli_query($connect,$sql);

                while($produk = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$no++."</td>";
                    echo "<td>".$produk['kode_produk']."</td>";
                    echo "<td>".$produk['nama_produk']."</td>";
                    echo "<td>".$produk['kategori']."</td>";
                    echo "<td>".$produk['stok']."</td>";
                    echo "<td>"."<img src=".$produk['urlimage']." style='height:100px; width: 120px;'>"."</td>";

                    echo "<td class='text-center'>";
                    echo "<a class='btn btn-sm btn-info' href='formeditproduct.php?kode_produk=".$produk['kode_produk']."'>Edit</a> | ";
                    echo "<a class='btn btn-sm btn-danger' href='deleteproduct.php?kode_produk=".$produk['kode_produk']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<br> <br>


        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>



    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>