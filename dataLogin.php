
<?php
session_start();
include "koneksi.php";
if (isset($_POST['login'])) {
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$sql="select * from user where email = '$Email' and password = '$Password'";
	$query=mysqli_query($con, $sql);

if (!$query || mysqli_num_rows($query)==0) {
	echo "<script>alert('Sorry. Email and password maybe not matched with our database. Please sign up first, and come back with just login.');history.go(-1);</script>";
}else{
	while ($data=mysqli_fetch_array($query)) {
		$_SESSION['nama']=$data['firstname'] . ' ' . $data['lastname'];
		$_SESSION['id']=$data['idUser'];
		if ($data['idLevel'] == 1) {
			header('location:product.php');
		}	
		if ($data['idLevel'] == 2) {
			header('location:homeLogin.php');
		}
}
}	
}
?>