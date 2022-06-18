<?php
require 'fungsi.php';
$idlaporan = $_GET["id"];
$htl = query("SELECT * FROM laporan WHERE idlaporan = $idlaporan")[0];

if(isset($_POST["submit"])){
    if(updatelaporan($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href = 'laporan.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href = 'laporan.php';
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
        <h3 class="text-start ms-4 text-light fw-light">Update</h3>
        <br>
</section>
<section>
<div class="card ms-4" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Update Data</h5>
    <p class="card-text">
    <form action="" method="post" enctype="multipart/form-data">
        <table cellspacing="2" cellpadding="4">
            <tbody>
            <input type="hidden" name="idlaporan" value="<?= $htl["idlaporan"]; ?>">
            <input type="hidden" name="laporanlama" value="<?= $htl["file"]; ?>">
                <tr>
                    <td>File </td>
                    <td><input type="file" name="file" id="file" required><br></td>
                </tr>   
                <tr>
                    <td>Tanggal</td>
                    <td>: <input type="date" name="tglupload" id="tanggal" value="<?= $htl["tglupload"]; ?>" required><br></td>
                </tr>  
                <tr>
                    <td>Keterangan</td>
                    <td>: <input type="text" name="ket" id="ket" value="<?= $htl["ket"]; ?>" required><br></td>
                </tr>  
                <tr>
                    <td>Author</td>
                    <td>: <input type="text" name="author" id="author" value="<?= $htl["author"]; ?>" required><br></td>
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