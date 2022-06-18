<?php

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

 function hapus($id){
     global $koneksi;
    mysqli_query($koneksi, "DELETE FROM customer WHERE id = $id");
    return mysqli_affected_rows($koneksi);
 }

 function update($data){
    global $koneksi;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $cin = htmlspecialchars($data["cin"]);
    $cout = htmlspecialchars($data["cout"]);
    $telp = htmlspecialchars($data["telp"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE customer SET
                nama = '$nama',
                tipe = '$tipe',
                cin = '$cin',
                cout = '$cout',
                telp = '$telp' ,
                status = '$status' WHERE id = $id 
                ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
 }

// laporan

function tambahlaporan($data){
   global $koneksi;
  $ket = htmlspecialchars($data["ket"]);
  $tglupload = htmlspecialchars($data["tglupload"]);
  $author = htmlspecialchars($data["author"]);

  $file = upload();
  if( !$file) {
     return false;
  }

  $query = "INSERT INTO laporan
              VALUES
              ('','$file','$ket','$tglupload','$author')";
  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

function upload(){
   $namaFile = $_FILES['file']['name'];
   $ukuranFile = $_FILES['file']['size'];
   $error = $_FILES['file']['error'];
   $tmpName = $_FILES['file']['tmp_name'];

   if($error == 4){
      echo "<script>
            alert('Input file terlebih dahulu');
      </script>";
      return false;
   }

   $tipeFile = ['pdf','docx'];
   $ekstensi = explode('.', $namaFile);
   $ekstensi = strtolower (end($ekstensi));
   if( !in_array($ekstensi, $tipeFile)){
      echo "<script>
               alert('Hanya menerima file .pdf atau .docx');
            </script>";
      return false;
   }
   
   if( $ukuranFile > 20000000){
      echo "<script>
               alert('ukuran file terlalu besar');
            </script>";
      return false;
   }

   move_uploaded_file($tmpName, 'laporan/'. $namaFile);
   return $namaFile;

}

function hapuslaporan($idlaporan){
   global $koneksi;
  mysqli_query($koneksi, "DELETE FROM laporan WHERE idlaporan = $idlaporan");
  return mysqli_affected_rows($koneksi);
}

function updatelaporan($data){
  global $koneksi;
  $idlaporan = $data["idlaporan"];
  $ket = htmlspecialchars($data["ket"]);
  $tglupload = htmlspecialchars($data["tglupload"]);
  $author = htmlspecialchars($data["author"]);
  $laporanlama = $data["laporanlama"];

if($_FILES['file']['error'] === 4){
   $file = $laporanlama;
} else {
   $file = upload();
}

  $query = "UPDATE laporan SET
              file = '$file',
              ket = '$ket',
              tglupload = '$tglupload',
              author = '$author' WHERE idlaporan = $idlaporan 
              ";
  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}


?>