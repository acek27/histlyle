<?php 
    include 'koneksi.php';
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
        <a class="navbar-brand" href="homeAdmin.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 120px">
        <li>
          <a href="product.php" title="Product" style="margin-right: 30px"><span class="glyphicon glyphicon-tag"></span> Product</a>
        </li>
        <li>
          <a href="order.php" title="Order" style="margin-right: 30px"><span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span> Order</a>
        </li>
        <li>
          <a href="payment.php" title="Payment" style="margin-right: 30px"><span class="glyphicon glyphicon-usd"><span class="badge">0</span></span> Payment</a>
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
    <hr style="border-color: lightgrey">
  </nav>
  <div class="container" style="margin-top: 8%; margin-bottom: 1%">
  <div class="container">
    <div class="carousel slide" data-ride="carousel" id="myCarousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
        <li data-slide-to="1" data-target="#myCarousel"></li>
        <li data-slide-to="2" data-target="#myCarousel"></li>
      </ol><!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active"><img alt="" src="img/Banner1.jpg" style="width:100%;"></div>
        <div class="item"><img alt="" src="img/Banner2.jpg" style="width:100%;"></div>
        <div class="item"><img alt="" src="img/Banner3.jpg" style="width:100%;"></div>
      </div><!-- Left and right controls -->
      <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span></a>
    </div>
  </div>
  <hr class="container" style="border-color: lightgrey;">
  <div class="container">
    <h1 style="text-align: center">All Products</h1>
    <div class="row text-center">
          <?php
    $query ="select * from brand b join produk p on b.id_brand=p.id_brand";
    $result =mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($result)){
  ?>
      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="product.php">
          <img title="<?php echo $data['nama'] .' - '. $data['namaBrand']; ?>" src="Upload/<?php echo $data['gambar']; ?>" height='405px' width='270px'></a>
          <p><strong><?php echo $data['nama'] .' - '. $data['namaBrand']; ?></strong></p>
          <p>Rp<?php echo number_format($data['price'],2,",",".");?></p>
        </div>
      </div>
      <?php }  ?>
    </div>
  </div>
</div>
  <br><br>
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
  </footer><!-- Modal -->
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
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label> <input class="form-control" id="username" placeholder="Email" type="text">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label> <input class="form-control" id="psw" placeholder="Password" type="password">
            </div>
            <div class="checkbox">
              <label><input checked type="checkbox" value="">Remember me</label>
            </div><button class="btn btn-default btn-success btn-block" type="submit">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="signup.php">Sign Up</a></p>
          <p>Forgot <a href="forgot.php">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>