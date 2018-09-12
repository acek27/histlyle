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
        <a class="navbar-brand" href="Home.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 100px">
        <li>
          <a href="Wishlist.php" title="Wishlist"><span class="glyphicon glyphicon-heart"><span class="badge">0</span></span> Wishlist</a>
        </li>
        <li>
          <a href="cart.php" title="Cart"><span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span> Cart</a>
        </li>
        <li class="active1">
          <a href="signup.php" title="Sign Up"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
        </li>
        <li>
          <a data-toggle="modal" href="#myModal" title="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
  <div class="container" >
    <ul class="breadcrumb" style="background-color: transparent; margin-top: 11%">
      <li>
        <a href="Home.php">Home</a>
      </li>
      <li class="active">Sign Up</li>
    </ul>
  </div>
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="text-align: center">Sign Up</h3>
          <p style="text-align: center; color: grey">Dapatkan Keuntungan dan Penawaran Menarik dari HiStyle</p>
        </div>
<?php 
    require_once("koneksi.php");
    $query = "SELECT * from level where level='Customer'";
    $level= mysqli_query($con,$query);
?>
        <div class="panel-body">
          <form action="dataDaftar.php" method="POST" style="margin-left: 33%; margin-top: 2%">
            <?php while ($data = mysqli_fetch_array($level)){ ?>
                <input class="form-control hidden" name="level" value="<?php echo $data['idLevel'];?>">
                <?php
              }
              ?>
            <div class="col-md-3">
              <div class="form-group">
                <label>Firstname</label> <input class="form-control" name="firstname" placeholder="Firstname" type="text" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Lastname</label> <input class="form-control" name="lastname" placeholder="Lastname" type="text" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>E-mail</label> <input class="form-control" name="email" placeholder="E-mail" type="email" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label> <input class="form-control" name="password" placeholder="Password" type="password" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>Confirm Password</label> <input class="form-control" name="confirm" placeholder="Confirm Password" type="password" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <label>Gender</label> <label class="radio-inline" style="padding-left: 50px"><input name="gender" type="radio" value="Male" required>Male</label> <label class="radio-inline" style="padding-left: 50px"><input name="gender" type="radio" value="Female" required>Female</label>
            </div><br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>Birthday</label> <input class="form-control" name="birthday" type="date" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>Handphone Number</label> <input class="form-control" name="nohp" placeholder="Handphone Number" type="text" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address</label> <input class="form-control" name="address" placeholder="Full Address with RT/RW" type="text" required>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="province" placeholder="Province" type="text" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="city" placeholder="City" type="text" required>
              </div>
            </div><br>
            <br>
            <br>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="district" placeholder="District" type="text" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input class="form-control" name="postal_code" placeholder="Postal Code" type="text" required>
              </div>
            </div><br>
            <br>
            <br>
            <div class="col-md-4">
              <div class="form-group">
                <label>Account Number</label> <input class="form-control" name="account" placeholder="Account Number" type="text" required>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Bank</label> <select class="form-control" name="bank">
                  <option>
                    BRI
                  </option>
                  <option>
                    BCA
                  </option>
                  <option>
                    BNI
                  </option>
                  <option>
                    BTN
                  </option>
                  <option>
                    Mandiri
                  </option>
                  <option>
                    Jatim
                  </option>
                </select>
              </div>
            </div><br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
              <div class="form-group">
                <button class="btn btn1" style="border-color: lightgrey; border-radius: 5px" type="submit" name="daftar">Sign Up</button>
                <p>Have an Account? <a data-toggle="modal" href="#myModal">Login</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
                    <a href="aboutus.php" style="padding-left: 0px; padding-top: 0px; padding-bottom: 0px">
                    <p>About Us</p></a>
                  </li>
                  <li>
                    <a href="contactus.php" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Contact Us</p></a>
                  </li>
                  <li>
                    <a href="why.php" style="padding-top: 0px; padding-bottom: 0px">
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">&times;</button>
          <h3 style="color:black;">Login</h3>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> Username</label> <input class="form-control" id="username" placeholder="Enter email" type="text">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Password</label> <input class="form-control" id="psw" placeholder="Enter password" type="password">
            </div>
            <div class="checkbox">
              <label><input checked type="checkbox" value="">Remember me</label>
            </div><button class="btn btn-default btn-success btn-block" type="submit">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="signup.php">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>