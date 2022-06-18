<?php
require 'fungsi.php';
$id = $_GET["id"];
$htl = query("SELECT * FROM customer WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if(update($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href = 'customer.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href = 'customer.php';
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="CH.png"/>
    <title>CH Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color: #1D5C63;" align = center>
<section>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1A3C40">
            <div class="container-fluid">
              <a class="navbar-brand" href="beranda.php">
                <img src="CH.png" alt="" width="44" height="44" class="d-inline-block align-text-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="customer.php">Customer</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="laporan.php">Laporan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="service.php">Room Service</a>
                  </li>
              </div>
            </div>
          </nav>
</section>
<section>
        <br>
        <h3 class="text-start ms-4 text-light fw-light">Customer</h3>
        <br>
</section>
<section>
<div class="card ms-4" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Update Data</h5>
    <p class="card-text">
    <form action="" method="post">
        <table cellspacing="2" cellpadding="4">
            <tbody>
                <input type="hidden" name="id" value="<?= $htl["id"]; ?>">
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" id="nama" value="<?= $htl["nama"]; ?>" required><br></td>
                </tr>  
                <tr>
                    <td>No. Telp</td>
                    <td>: <input type="text" name="telp" id="telp" value="<?= $htl["telp"]; ?>" required><br></td>
                </tr>        
                <tr>
                    <td>Tipe Kamar</td>
                    <td><input type="radio" name="tipe" id="tipe" value="Studio 1" required> Studio 1<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="tipe" value="Studio 2" required> Studio 2</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="tipe" value="Suite" required> Suite </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="tipe" id="tipe" value="King Suite" required> King Suite</td>
                </tr>
                <tr>
                    <td>Check-in</td>
                    <td>: <input type="date" name="cin" id="cin" value="<?= $htl["cin"]; ?>" required><br></td>
                </tr>
                <tr>
                    <td>Check-out</td>
                    <td>: <input type="date" name="cout" id="cout" value="<?= $htl["cout"]; ?>" required><br></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="radio" name="status" id="status" value="Checked-in" required> Check-in<br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="status" id="status" value="Checked-out" required> Check-out</td>
                </tr>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit" name="submit" class="btn btn-outline-dark btn-lg"> Update data</button>
    </form>

    </p>
  </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


<html>