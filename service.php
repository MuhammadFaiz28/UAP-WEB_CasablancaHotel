<?php
require 'fungsi.php';
$hotel = query("SELECT * FROM customer");
?>
<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="CH.png"/>
    <title>CH Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #1A3C40;" align = center>
<section>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1A3C40">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <img src="CH.png" alt="" width="66" height="66" class="d-inline-block align-text-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="btn btn-light ms-2" aria-current="page" href="customer.php"><b>Customer</b></a>
                  </li> 
                  <li class="nav-item">
                    <a class="btn btn-light ms-2" aria-current="page" href="service.php"><b>Room Service</b></a>
                  </li>
              </div>
            </div>
          </nav>
    </section>
    <section>
        <br>
        <h3 class="text-start ms-4 text-light fw-light">Room Service</h3>
        <br>
    </section>

    <section>
    <div class="card ms-4" style="width: 70rem;">
    <div class="card-body" >
    <p class="card-text">
    <table class="table table-light table-hover">
    <thead>
        <th>Nama Customer</th>
        <th>No. Telp</th>
        <th>Tipe Kamar</th>
        <th>Layanan</th>
    </thead>
    <?php foreach( $hotel as $row) : ?>
    <tbody>
        <tr>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["telp"]; ?></td>
          <td><?= $row["tipe"]; ?></td>
          <td><?= $row["layanan"]; ?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
    </p>
    </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <br>
    <br>
    <br>
    

</body>

</html>