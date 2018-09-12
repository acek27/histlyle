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
        <a class="navbar-brand" href="Home.php" title="HiStyle"><img alt="HiStyle" src="HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 100px">
        <li>
          <a href="Wishlist.php" title="Wishlist"><span class="glyphicon glyphicon-heart"><span class="badge">0</span></span> Wishlist</a>
        </li>
        <li>
          <a href="cart.php" title="Cart"><span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span> Cart</a>
        </li>
        <li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><span class="badge">0</span></span>Your Account</a>
  <ul class="dropdown-menu">
    <li><a href="accset.php">Account Setting</a></li>
    <li><a href="detorder.php">Order</a></li>
    <li><a href="paycom.php">Payment Comfirmation</a></li>
  </ul>
</li></ul>
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
    <div class="container" style="margin-top: 8%; margin-bottom: 10px">
      <div class="col-md-2">
        <button class="btn btn-primary"><span class="glyphicon-plus"></span>Tambah Data</button>
    </div>
        <button class="btn btn-primary"><span class="glyphicon-pencil"></span>Edit Data</button>
    </div></div>
      <div class="container">
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="text-align: center">Produk</h3>
        </div>
        <div class="panel-body">
          <form action="/action_page.php">
            <table class="table">
    <thead>
      <tr>
        <th>Produk</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><img src="Tuneeca 1.jpg" style="width: 100px;height: 100px"></td>
        <td>Robe</td>
        <td>Tuneeca</td>
        <td>Rp419.000,00</td>
      </tr>
      <tr class="warning">
        <td><img src="Tuneeca 1.jpg" style="width: 100px;height: 100px"></td>
        <td>Robe</td>
        <td>Tuneeca</td>
        <td>Rp419.000,00</td>
      </tr>
      <tr class="info">
        <td><img src="Tuneeca 1.jpg" style="width: 100px;height: 100px"></td>
        <td>Robe</td>
        <td>Tuneeca</td>
        <td>Rp419.000,00</td>
      </tr>
      <tr class="danger">
        <td><img src="Tuneeca 1.jpg" style="width: 100px;height: 100px"></td>
        <td>Robe</td>
        <td>Tuneeca</td>
        <td>Rp419.000,00</td>
      </tr>
    </tbody>
  </table>
</div>

          </form>
        </div></div></div></div>    
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
                      <li><img src="bca.png" style="width: 80px; height: 25px; margin-top: 10px"></li>
                      <li><img src="bri.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                      <li><img src="bni.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                      <li><img src="mandiri.png" style="width: 80px; height: 25px; margin-top: 20px"></li>
                      <li><img src="btn.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 20px;"></li>
                      <li><img src="jatim.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 20px"></li>
                    </ul>
                  </div><br>
                  <div class="row">
                    <h4 style="display: inline-block;"><strong>Shipment Option</strong></h4>
                    <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                      <li><img src="jne.png" style="width: 30px; height: 30px; margin-right: 10px"></li>
                      <li><img src="j&t.png" style="width: 35px; height: 15px; margin-right: 10px"></li>
                      <li><img src="pos.png" style="width: 25px; height: 25px; margin-right: 10px"></li>
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
                      <a href="why.php" style="padding-left:3px; padding-top: 0px; padding-bottom: 0px">
                      <p>Why Must Be A Member?</p></a>
                    </li>
                  </ul>
                  <h4><strong>Make Us Better</strong></h4>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="suggest.php" style="padding-left:0px; padding-top: 0px; padding-bottom: 0px">
                      <p>Suggestion</p></a>
                    </li>
                    <li>
                      <a href="critics.php" style="padding-top: 0px; padding-bottom: 0px">
                      <p>Critic</p></a>
                    </li>
                  </ul>
                </div>
                <h4 style="display: inline-block; margin-left: 15px"><strong>Find Us On</strong></h4>
                <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                  <li>
                    <a href="https://www.facebook.com/HiStyle" title="Facebook"><img src="fb.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com/HiStyle" title="Twitter"><img src="tw.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/HiStyle" title="Instagram"><img src="ig.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.line.com/HiStyle" title="Line"><img src="line.png" style="width: 48px; height: 20px; margin-right: 10px"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </footer>
  </nav>
</body>
</html>