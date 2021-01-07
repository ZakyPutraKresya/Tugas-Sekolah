<?php
include 'koneksi.php';
    
    $kode_produk = $_GET['kode_produk'];
    $sql = "SELECT * FROM produk WHERE kode_produk='$kode_produk'";
    $query = mysqli_query($connect, $sql);
    $produk = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Product</title>

    <style>
        body{
            background-image: url(https://images.wallpaperscraft.com/image/black_and_white_abstract_black_background_76384_1366x768.jpg);
        }
    </style>

</head>
<body>
    <!-- Form editnya -->
    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center"><b>Edit Product</b></div>
                        <div class="card-body">

                            <!-- Yang menyambungkan untuk ke simpan edit php -->
                            <form action="simpanedit.php" method="POST">
                
                                <div class="form-group">
                                    <label>Kode Produk :</label>
                                    <input type="text" readonly name="kode_produk" value="<?php echo $produk['kode_produk'] ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Nama Produk :</label>
                                    <input type="text" readonly name="nama_produk" value="<?php echo $produk['nama_produk'] ?>" placeholder="Masukkan Nama Produk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Harga Produk :</label>
                                    <input type="number" name="harga_produk" value="<?php echo $produk['harga_produk'] ?>" placeholder="Masukkan Harga Produk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Satuan :</label>
                                    <input type="text" readonly name="satuan" value="<?php echo $produk['satuan'] ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kategori :</label>
                                    <input type="text" readonly name="kategori" value="<?php echo $produk['kategori'] ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Url Image :</label>
                                    <input type="text" name="urlimage" value="<?php echo $produk['urlimage'] ?>" placeholder="Masukkan Url Foto" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Stock :</label>
                                    <input type="text" name="stok" value="<?php echo $produk['stok'] ?>" placeholder="Masukkan Stock Produk" class="form-control">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-warning">RESET</button>

                            </form>
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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>