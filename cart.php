<?php 
session_start();
    require_once("koneksi.php");
    $ID = $_SESSION['id'];
    $query = "select * from user where idUser=$ID";
    $user = mysqli_query($con,$query);
    $data = mysqli_fetch_array($user);
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
  <div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; border-color: white">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="homelogin.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 100px">
        <li>
          <a href="Wishlist.php" title="Wishlist"><span class="glyphicon glyphicon-heart"><span class="badge">0</span></span> Wishlist</a>
        </li>
        <li class="active1">
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
        <hr style="border-color: lightgrey">
  </nav>
</div>
    <div class="container" style="margin-top: 8%">
      <ul class="breadcrumb" style="background-color: transparent; margin-top: -10px">
        <li>
          <a href="Home.php">Home</a>
        </li>
        <li class="active">Cart</li>
      </ul>
    <?php
    $total = 0;
                
                if (isset($_SESSION['items'])) {
                    foreach ($_SESSION['items'] as $key => $val) {
$query ="select nama, price from produk where idProduk=$key";
$result =mysqli_query($con,$query);
if(!$result || mysqli_num_rows($result) ==0){
  echo '<div class="panel panel-warning">
        <div class="panel-heading">
          <h3>Belum Ada Barang Belanja</h3>
        </div>
        <div class="panel-body">
          Klik button <span class="glyphicon glyphicon-shopping-cart"></span> untuk menambah barang belanja ke cart
        </div>
      </div>';
}else{
  echo '<table class="table table-hover">
    <thead>
        <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Sub Total</th>
      </tr></thead>';
  $data = mysqli_fetch_array($result);
  $jumlah_harga = $data['price'] * $val;
            $total += $jumlah_harga;
            $no = 1;

  ?>
     <tbody>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td>Rp<?php echo number_format ($data['price'],2,",",".");?></td>
    <td><?php echo number_format($val); ?></td>
    <td>Rp<?php echo number_format($jumlah_harga,2,",","."); ?></td>
    <td><a href="buktitransfer.php?kd=<?php echo $data['idPemesanan'];?>"><button class="btn">Transfer</button></a>
      <button class="btn btn-default" data-toggle="modal" data-target="#myModal2">Tunai</button></td>
    </tr>
    </tbody><?php echo '</table>'; ?>
    <?php
  }
}}
  ?> 
  </div>
    

    <footer>
      <nav class="navbar-default">
        <div class="panel-footer">
          <div class="container">
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