<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://img.icons8.com/external-flatart-icons-outline-flatarticons/50/000000/external-cart-black-friday-flatart-icons-outline-flatarticons.png">
</head>
<body style="background: orange;">
<div class="row" style="padding:10px">
  <div class="col-8">
      <h1>Belanja Online</h1>
      <hr>
    <form method="POST" action="form_belanja.php" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Produk Pilihan</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" name="proses" class="btn btn-success">
            </div>
        </div>
    </form>
  </div>
  <div class="col-4">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Daftar Harga</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">TV : 4.200.000</th>

    </tr>
    <tr>
      <th scope="row">Kulkas : 3.100.000</th>
    </tr>
    <tr>
      <th scope="row">Mesin Cuci : 3.800.000</th>
    </tr>
  </tbody>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Harga Dapat Berubah Setiap Saat</th>

    </tr>
  </thead>
</table>

  </div>
</div>
<hr>
<fieldset style="padding:10px; border: 0.1em solid black; margin-right:50%; margin-left: 10px;">
  <legend>Data Anda</legend>
  <div>
    <?php

    $proses = $_POST["proses"];
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

    switch ($produk) {
      case 'TV':
        $harga = 4200000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;
      
      case 'KULKAS':
        $harga = 3100000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;
      
      case 'MESIN CUCI':
        $harga = 3800000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') .",-";
        break;
      default:
        # code...
        break;
    }

    ?>
  </div>
</fieldset>
</body>
</html>