<?php
include_once 'koneksi.php';
if(isset($_POST['add'])) {
  $Pdname = $_POST['nama'];
  $Brand = $_POST['brand'];
  $Category = $_POST['category'];
  $Detail = $_POST['detail'];
  $Size = $_POST['size'];
  $Price = $_POST['price'];
  $Stock = $_POST['stok']; 
  $Image = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $path = "Upload/".$Image;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO produk VALUES('','$Pdname', '$Brand', '$Category', '$Detail', '$Size', '$Price', '$Stock', '$Image')";
  if (mysqli_query($con, $query)){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: product.php");
    //header("location: adminLapangan.php"); // Redirect ke halaman index.php
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
  $ID = $_POST['idProduk'];
  $Pdname = $_POST['nama'];
  $Brand = $_POST['brand'];
  $Category = $_POST['category'];
  $Detail = $_POST['detail'];
  $Size = $_POST['size'];
  $Price = $_POST['price'];
  $Stock = $_POST['stok']; 
  $Image = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $path = "Upload/".$Image;

  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "UPDATE produk SET nama = '$Pdname', id_brand = '$Brand', idCategory = '$Category', detail = '$Detail', idSize = '$Size', price = '$Price', stok = '$Stock', gambar = '$Image' WHERE idProduk = '$ID'";

    if (mysqli_query($con, $query)){ // Cek jika proses simpan ke database sukses atau tidak
    header("location: product.php"); // Redirect ke halaman index.php
  }else{
    echo "Error: database" . $query . "<br>" . mysqli_error($con);
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Error: blaaaa" . $con->error;
}
}

if (isset($_GET['idProduk'])) {
  $ID = $_GET['idProduk'];
    $query = "DELETE FROM produk WHERE idProduk = $ID";
  if (mysqli_query($con, $query)) {
    //echo "FINALLY...";
    header("location: product.php");
} else {
    echo "Error: " . mysqli_error($con);
}
}

?>