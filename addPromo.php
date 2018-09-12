<?php
include_once 'koneksi.php';
if(isset($_POST['promo'])) {
  $pCode = $_POST['kodePromo'];
  $Discount = $_POST['disc'];
  $Brand = $_POST['brand'];
  $Category = $_POST['category'];
  $Banner = $_FILES['banner']['name'];
  $tmp = $_FILES['banner']['tmp_name'];
  $path = "Upload/".$Banner;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO promotion VALUES('','$pCode', '$Discount', '$Banner', '$Brand', '$Category')";
  $insert = mysqli_query($con, $query);        
  if ($insert){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: promo.php");
    //echo "Yeay";
  }else{
    // Jika Gagal, Lakukan :
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Error: blaaaa" . $query . "<br>" . $con->error;
}
}

if(isset($_POST['edit'])) {
  $ID = $_POST['idPromo'];
  $pCode = $_POST['kodePromo'];
  $Discount = $_POST['disc'];
  $Brand = $_POST['brand'];
  $Category = $_POST['category'];
  $Banner = $_FILES['banner']['name'];
  $tmp = $_FILES['banner']['tmp_name'];
  $path = "Upload/".$Banner;

  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "UPDATE promotion SET kodePromo = '$pCode', disc = '$Discount', id_brand = '$Brand', idCategory = '$Category', banner = '$Banner' WHERE idPromo = '$ID'";

    if (mysqli_query($con, $query)){ // Cek jika proses simpan ke database sukses atau tidak
    header("location: promo.php"); // Redirect ke halaman index.php
  }else{
    echo "Error: database" . $query . "<br>" . mysqli_error($con);
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Error: blaaaa" . $con->error;
}
}

if (isset($_GET['idPromo'])) {
  $ID = $_GET['idPromo'];
    $query = "DELETE FROM promotion WHERE idPromo = $ID";
  if (mysqli_query($con, $query)) {
    //echo "FINALLY...";
    header("location: promo.php");
} else {
    echo "Error: " . mysqli_error($con);
}
}

?>