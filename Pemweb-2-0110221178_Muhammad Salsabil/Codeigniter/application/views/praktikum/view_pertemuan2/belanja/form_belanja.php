<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="border border-primary rounded m-5 p-4">

    <div class="row">
      <div class="col-md-7">
        <form method="POST" action="form_belanja.php">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Costumer</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div>
                <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"
                  required="required">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"
                  required="required">
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"
                  required="required">
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-archive"></i>
                  </div>
                </div>
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input class="btn btn-success" type="submit" value="Kirim" name="proses">
            </div>
          </div>
        </form>

        <div class="row">
          <div class="col-md-12">
            <?php
$_nama = $_POST['nama'];
$_produk = $_POST['produk'];
$_jumlah = $_POST['jumlah'];

if ($_produk == 'tv') {
    $total_harga = $_jumlah * 4200000;
} elseif($_produk == 'kulkas') {
    $total_harga = $_jumlah * 3100000;
} elseif($_produk == 'mesin_cuci') {
    $total_harga = $_jumlah * 3800000;
}else {
    "mana ada mas !!!";
}

switch ($_produk) {
  case('tv') :
      $nama_produk = "TV";
      break;
  case ('kulkas'):
      $nama_produk = "KULKAS"; 
      break;
  
  case ('mesin_cuci'):
      $nama_produk = "MESIN CUCI"; 
      break;

  default:
      echo "mana ada mass !!";
}

echo 'Nama : '. $_nama;
echo '<br>Produk Pilihan : '. $nama_produk;
echo '<br>Jumlah : '. $_jumlah;

echo '<br><br>Total Harga : '. number_format($total_harga);

?>
          </div>
        </div>
      </div>

      <div class="col-md-4 ml-5">
        <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV : 4.200.000></li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">MESIN CUCI : 3.800.000</li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>

  </div>
</body>

</html>