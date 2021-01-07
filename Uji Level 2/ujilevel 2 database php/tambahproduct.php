<!DOCTYPE html>
<html>
<head>
    <title>Form Add Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body{
            background-image: url(https://images.wallpaperscraft.com/image/black_and_white_abstract_black_background_76384_1366x768.jpg);
        }
    </style>

</head>
<body>

<?php 

// koneksi database 
$connect = mysqli_connect('localhost','root','','ujilevel2');

// mengambil data produk dari tabel berdasarkan kode terbesar
$query = mysqli_query($connect, "SELECT max(kode_produk) as kodeTerbesar FROM produk");
$data = mysqli_fetch_array($query);
$kodeProduk = $data['kodeTerbesar'];

// mengambil angka dari kode produk terbesar, menggunakan fungsi substr(memotong string) dan diubah ke integer(angka) dengan (int)
$urutan = (int) substr($kodeProduk, 4, 4);

// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membuat kode produk baru
// string sprintf("%04s", $urutan); berfungsi untuk membuat string menjadi 4 karakter
// misalnya string sprintf("%04s", 22); maka akan menghasilkan '0022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya P jadinya P0001 dan sterusnya
$huruf = "P";
$kodeProduk = $huruf . sprintf("%04s", $urutan);
?>

<div class="container" style="margin-top: 40px">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header text-center"><b>Tambah Product</b></div>
          <div class="card-body">
            <!-- Buat menghubungkan ke file simpan produk jika di klik simpan -->
            <form action="simpanproduct.php" method="POST">
                
              <div class="form-group">
                <label>Kode Produk :</label>
                <input type="text" name="kode_produk" value="<?php echo $kodeProduk ?>" class="form-control" readonly>
              </div>

              <div class="form-group">
                <label>Nama Produk :</label>
                <input type="text" name="nama_produk" required placeholder="Masukkan Nama Produk" class="form-control">
              </div>

              <div class="form-group">
                <label>Harga Produk :</label>
                <input type="number" name="harga_produk" required placeholder="Harga Produk" class="form-control">
              </div>

              <div class="form-group">
                <label>Satuan :</label>
                  <select class="form-control" name="satuan" id="satuan" required>
                    <option hidden>Pilih Satuan :</option>
                    <option value="pcs">pcs</option>
                    <option value="Bungkus">Bungkus</option>
                    <option value="Mangkok">Mangkok</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Unit">Unit</option>
                  </select>
              </div>

              <div class="form-group">
                <label>Kategori :</label>
                  <select class="form-control" name="kategori" id="kategori" required>
                    <option hidden>Pilih Kategori Barang :</option>
                    <option value="Alat Tulis">Alat Tulis</option>
                    <option value="Barang Elektronik">Barang Elektronik</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>                    
                  </select>
              </div>

              <div class="form-group">
                <label>URL Image :</label>
                <input type="text" required name="urlimage" required placeholder="Masukkan URL Foto" class="form-control">
              </div>

              <div class="form-group">
                <label>Stock Awal :</label>
                <input type="text" name="stok" required placeholder="Stock Awal" class="form-control">
              </div>
                
              <button type="submit" class="btn btn-primary">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>

            </form>
          </div>
      </div>
    </div>
  </div>
</div>
    <br> <br>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>