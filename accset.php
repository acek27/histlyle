<?php 
session_start();
include 'koneksi.php';
if($_SESSION['id']) {
        $ID = $_SESSION['id'];
        $query = "SELECT * FROM user WHERE idUser = $ID";
        $result = mysqli_query($con, $query);
        foreach ($result as $data) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>HiStyle</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="histyle.css" rel="stylesheet" type="text/css">
  <script src="bootstrap/js/jquery.min.js">
  </script>
  <script src="bootstrap/js/bootstrap.min.js">
  </script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; border-color: white">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="homelogin.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 100px">
        <li>
          <a href="Wishlist.php" title="Wishlist"><span class="glyphicon glyphicon-heart"><span class="badge">0</span></span> Wishlist</a>
        </li>
        <li>
          <a href="cart.php" title="Cart"><span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span> Cart</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><span class="badge">0</span></span> <?=$_SESSION['nama'];?></a>
          <ul class="dropdown-menu">
            <li>
              <a href="accset.php?idUser=<?php echo $data['idUser'];?>">Account Setting</a>
            </li>
            <li>
              <a href="detorder.php">Detail Order</a>
            </li>
            <li>
              <a href="paycom.php">Payment Comfirmation</a>
            </li>
          </ul>
        </li>
      </ul>
      <form action="/action_page.php" class="navbar-form navbar-right">
        <div class="input-group" style="padding-top: 40px">
          <input class="form-control" name="search" placeholder="Search" type="text">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <hr class="container" style="border-color: lightgrey">
  </nav>
  <div class="container" style="margin-top: 9%">
    <ul class="breadcrumb" style="background-color: transparent; margin-top: -10px">
      <li>
        <a href="Home.php">Home</a>
      </li>
      <li class="active">Account Setting</li>
    </ul>
  </div>
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="text-align: center">Account Setting</h3>
        </div>
        <div class="panel-body">
          <form action="/action_page.php" style="margin-left: 33%; margin-top: 2%">
            <div class="col-md-3">
              <div class="form-group">
                <label for="fname">Firstname</label> <input class="form-control" name=firstname value="<?php echo $data['firstname'];?>" type="text">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="lname">Lastname</label> <input class="form-control" name="lastname" value="<?php echo $data['lastname'];?>" type="text">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">E-mail</label> <input class="form-control" readonly name="email" value="<?php echo $data['email'];?>" type="email">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pwd">Password</label> <input class="form-control" name="password" value="<?php echo $data['password'];?>" type="password">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pwd">Confirm Password</label> <input class="form-control" name="confirm" value="<?php echo $data['confirm'];?>" type="password">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <label for="gender">Gender</label> <label class="radio-inline" style="padding-left: 50px"><input readonly <?php if ($data['gender']=="Male") echo "checked";?> value="Male" name="gender" type="radio">Male</label> 
              <label class="radio-inline" style="padding-left: 50px"><input readonly <?php if ($data['gender']=="Female") echo "checked";?> value="Female" name="gender" type="radio">Female</label>
            </div><br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="birthday">Birthday</label> <input class="form-control" readonly name="birthday" type="date" value="<?php echo $data['birthday'];?>">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="hp">Handphone Number</label> <input class="form-control" name="nohp" value="<?php echo $data['nohp'];?>" type="text">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label for="address">Address</label> <input class="form-control" name="address" value="<?php echo $data['address'];?>" type="text">
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="province" value="<?php echo $data['province'];?>" type="text">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="city" value="<?php echo $data['city'];?>" type="text">
              </div>
            </div><br>
            <br>
            <br>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" nama="district" value="<?php echo $data['district'];?>" type="text">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" nama="postal_code" value="<?php echo $data['postal_code'];?>" type="text">
              </div>
            </div><br>
            <br><br>
            <div class="col-md-4">
              <div class="form-group">
                <label for="acc">Account Number</label> <input class="form-control" name="account" value="<?php echo $data['account'];?>" type="text">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="bank">Bank</label> <select class="form-control" name="bank">
                  <option <?php if ($data['bank']=="BRI") echo "selected";?> value="BRI">
                    BRI
                  </option>
                  <option <?php if ($data['bank']=="BCA") echo "selected";?> value="BCA">
                    BCA
                  </option>
                  <option <?php if ($data['bank']=="BNI") echo "selected";?> value="BNI">
                    BNI
                  </option>
                  <option <?php if ($data['bank']=="BTN") echo "selected";?> value="BTN">
                    BTN
                  </option>
                  <option <?php if ($data['bank']=="Mandiri") echo "selected";?> value="Mandiri">
                    Mandiri
                  </option>
                  <option <?php if ($data['bank']=="Jatim") echo "selected";?> value="Jatim">
                    Jatim
                  </option>
                </select>
              </div>
            </div><br>
            <br><br><br><br>
            <div class="col-md-6">
              <div class="form-group">
                <button class="btn btn1" style="border-color: lightgrey; border-radius: 5px" type="submit">Save Change</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <?php
}}
?>
  <footer>
    <nav class="navbar-default">
      <div class="panel-footer">
        <div class="container">
          <br>
          <div class="row test">
            <div class="col-md-12">
              <div class="col-md-4">
                <h4><strong>Customer Care</strong></h4>
                <p>Monday - Friday on 9AM - 6PM</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Muncar, Banyuwangi, Jawa Timur 68472</p>
                <p><span class="glyphicon glyphicon-phone"></span> Phone: +6285230540054</p>
                <p><span class="glyphicon glyphicon-envelope"></span> Email: histyle@gmail.com</p>
                <p>2018 © Histyle. ALL Rights Reserved.</p>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <h4><strong>Payment Option</strong></h4>
                  <ul class="nav navbar-nav" style="width:90%">
                    <li><img src="img/bca.png" style="width: 80px; height: 25px; margin-top: 10px"></li>
                    <li><img src="img/bri.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                    <li><img src="img/bni.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                    <li><img src="img/mandiri.png" style="width: 80px; height: 25px; margin-top: 20px"></li>
                    <li><img src="img/btn.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 20px;"></li>
                    <li><img src="img/jatim.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 20px"></li>
                  </ul>
                </div><br>
                <div class="row">
                  <h4 style="display: inline-block;"><strong>Shipment Option</strong></h4>
                  <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                    <li><img src="img/jne.png" style="width: 30px; height: 30px; margin-right: 10px"></li>
                    <li><img src="img/j&t.png" style="width: 35px; height: 15px; margin-right: 10px"></li>
                    <li><img src="img/pos.png" style="width: 25px; height: 25px; margin-right: 10px"></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <h4><strong>Information</strong></h4>
                <ul class="nav navbar-nav">
                  <li>
                    <a href="aboutusLogin.php" style="padding-left: 0px; padding-top: 0px; padding-bottom: 0px">
                    <p>About Us</p></a>
                  </li>
                  <li>
                    <a href="contactusLogin.php" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Contact Us</p></a>
                  </li>
                  <li>
                    <a href="whyLogin.php" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Why Must Us?</p></a>
                  </li>
                </ul>
              </div>
                <div class="col-md-4">
                <h4><strong>Make Us Better</strong></h4>
                <ul class="nav navbar-nav">
                  <li>
                    <a href="mailto:histyle@gmail.com?subject=Suggestion%20&body=Send%20Me%20Your Suggest" style="padding-left:0px; padding-top: 0px; padding-bottom: 0px">
                    <p>Suggestion</p></a>
                  </li>
                  <li>
                    <a href="mailto:histyle@gmail.com?subject=Critic%20&body=Send%20Me%20EYour Critic" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Critic</p></a>
                  </li>
                </ul>
              </div>
              <h4 style="display: inline-block; margin-left: 15px"><strong>Find Us On</strong></h4>
              <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                <li>
                  <a href="https://www.facebook.com/HiStyle" title="Facebook"><img src="img/fb.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/HiStyle" title="Twitter"><img src="img/tw.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/HiStyle" title="Instagram"><img src="img/ig.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                </li>
                <li>
                  <a href="https://www.line.com/HiStyle" title="Line"><img src="img/line.png" style="width: 48px; height: 20px; margin-right: 10px"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </footer>
</body>
</html>