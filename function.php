<?php

abstract class Tipe{
   const Studio1 = 'Studio 1';
   const Studio2 = 'Studio 2';
   const Suite = 'Suite';
   const KingSuite = 'King Suite';
}

$koneksi = mysqli_connect("localhost","id19127481_root","Marimenginap_123","id19127481_kasablanka");


 function query($query){
     global $koneksi;
     $result = mysqli_query($koneksi, $query);
     $temp = [];
     while ($row = mysqli_fetch_assoc($result)){
        $temp[] = $row;
    }
    return $temp;
}

function tambah($data){
   global $koneksi;
   
  $nama = htmlspecialchars($data["nama"]);
  $tipe = htmlspecialchars($data["tipe"]);
  $cin = htmlspecialchars($data["cin"]);
  $cout = htmlspecialchars($data["cout"]);
  $telp = htmlspecialchars($data["telp"]);
  $status = htmlspecialchars($data["status"]);
  $rating = htmlspecialchars($data["rating"]);
  $layanan= htmlspecialchars($data["layanan"]);

  switch($tipe){
   case Tipe::Studio1:
       $harga = 400000;
       break;
   case Tipe::Studio2:
       $harga = 525000;
       break;
   case Tipe::Suite:
       $harga = 800000;
       break;
   case Tipe::KingSuite:
       $harga = 1100000;
       break;
   }

   $totalHari = round(strtotime($cout) - strtotime($cin))/86400;
   $totalTagihan = $totalHari * $harga;

  $query = "INSERT INTO `customer`(`nama`, `tipe`, `cin`, `cout`, `telp`, `status`, `rating`, `layanan`, `total tagihan`) VALUES ('$nama','$tipe','$cin','$cout','$telp','$status','$rating', '$layanan', '$totalTagihan')";
  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

 function registrasi($data){
    global $koneksi;
    $uname = strtolower (stripslashes ($data["uname"]));
    $gmail = $data["gmail"];
    $phone = $data["phone"];
    $pw = mysqli_real_escape_string($koneksi, $data["pw"]);
    $pw2 = mysqli_real_escape_string($koneksi, $data["pw2"]);
 
    $result = mysqli_query($koneksi, "SELECT uname FROM registrasi WHERE uname = '$uname'");
    if(mysqli_fetch_assoc($result)){
       echo "<script>
                 alert('uname sudah terdaftar');
         </script>";
       return false;
    }
 
    $result2 = mysqli_query($koneksi, "SELECT uname FROM registrasi WHERE gmail = '$gmail'");
    if(mysqli_fetch_assoc($result2)){
       echo "<script>
                 alert('Email sudah terdaftar');
         </script>";
       return false;
    }

    $result3 = mysqli_query($koneksi, "SELECT uname FROM registrasi WHERE phone = '$phone'");
    if(mysqli_fetch_assoc($result3)){
       echo "<script>
                 alert('No. telp sudah terdaftar');
         </script>";
       return false;
    }
 
    if( $pw !== $pw2) {
       echo "<script>
                 alert('Konfirmasi password tidak sesuai');
         </script>";
       return false;
    }
 
    $pw = password_hash($pw, PASSWORD_DEFAULT);
    mysqli_query($koneksi, "INSERT INTO registrasi VALUES('', '$uname', '$gmail', '$phone', '$pw')");
    return mysqli_affected_rows($koneksi);
 
}

function checkin($data){
   global $koneksi;
   $id = $data["id"];
   $status = htmlspecialchars($data["status"]);

   $query = "UPDATE customer SET
               status = '$status' WHERE id = $id 
               ";
   mysqli_query($koneksi, $query);
   return mysqli_affected_rows($koneksi);
}

 
?>