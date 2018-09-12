<?php
  include 'koneksi.php';
  $Level = $_POST['level'];
  $Firstname = $_POST['firstname'];
  $Lastname = $_POST['lastname'];
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  $Confirm = $_POST['confirm'];
  $Gender = $_POST['gender']; 
  $Birthday = $_POST['birthday'];
  $Handphone = $_POST['nohp'];
  $Address = $_POST['address'];
  $Province = $_POST['province'];
  $City = $_POST['city']; 
  $District = $_POST['district'];
  $Postal = $_POST['postal_code'];
  $Account = $_POST['account'];
  $Bank = $_POST['bank'];

  $sql = "INSERT INTO user VALUES ('','".$Firstname."', '".$Lastname."', '".$Email."', '".$Password."', '".$Confirm."', '".$Gender."', '".$Birthday."', '".$Handphone."', '".$Address."', '".$Province."', '".$City."', '".$District."', '".$Postal."', '".$Account."', '".$Bank."', '".$Level."')";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('You can login now.');history.go(-2);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>