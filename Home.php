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
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 200px">
        <li>
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
    <hr style="border-color: lightgrey">
  </nav>
  <div class="container" style="margin-top: 8%; margin-bottom: 1%">
    <div class="col-md-12">
      <div class="col-md-2">
        <div class="dropdown">
          <button class="btn drop dropdown-toggle" data-toggle="dropdown" type="button">Shop By Products</button>
          <ul class="dropdown-menu">
            <li style="list-style: none"><input class="form-control" id="myInput" placeholder="Search.." type="text"></li>
            <li>
              <a href="#">Gamis</a>
            </li>
            <li>
              <a href="#">Scarf</a>
            </li>
            <li>
              <a href="#">Khimar</a>
            </li>
            <li>
              <a href="#">Bergo</a>
            </li>
            <li>
              <a href="#">Mukenah</a>
            </li> 
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="dropdown">
          <button class="btn drop dropdown-toggle" data-toggle="dropdown" type="button">Shop By Brands</button>
          <ul class="dropdown-menu">
            <li style="list-style: none"><input class="form-control" id="myInput" placeholder="Search.." type="text"></li>
            <li>
              <a href="#">Dannis</a>
            </li>
            <li>
              <a href="#">Rabbani</a>
            </li>
            <li>
              <a href="#">Lunan Go</a>
            </li>
            <li>
              <a href="#">Tuneeca</a>
            </li>
            <li>
              <a href="#">Esme</a>
            </li>
            <li>
              <a href="#">Elzatta</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
    <h1 style="text-align: center">Our Picks</h1>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="detailproduk.php">
          <img title="A Future Planner - Tuneeca" src="img/A Futur Planner.jpg"></a>
          <p><strong>A Future Planner</strong></p>
          <p>Rp765.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="The Warm Tone - Tuneeca" src="img/The Warm Tone.jpg">
          <p class="model"><strong>The Warm Tone</strong></p>
          <p>Rp995.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Identifiable Beauty - Tuneeca" src="img/Identifiable Beauty.jpg">
          <p class="model"><strong>Identifiable Beauty</strong></p>
          <p>Rp1.100.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Smooth Creamy Cake - Dannis" src="img/Dannis.jpg">
          <p class="model"><strong>Smooth Creamy Cake</strong></p>
          <p>Rp315.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Ibtissam In Blue - Tuneeca" src="img/Ibtissam In Blue.jpg">
          <p class="model"><strong>Ibtissam In Blue</strong></p>
          <p>Rp875.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Cue The Plush - Tuneeca" src="img/Tuneeca 1.jpg">
          <p class="model"><strong>Cue The Plush</strong></p>
          <p>Rp465.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
    </div>
  </div>
  <hr class="container" style="border-color: lightgrey">
  <div class="container">
    <h1 style="text-align: center">New</h1>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="The Art of Luxury - Esme" src="img/The Art of Luxury.jpg">
          <p class="model"><strong>The Art of Luxury</strong></p>
          <p>Rp512.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Chic As Lady - Tuneeca" src="img/Chic As Lady.jpg">
          <p class="model"><strong>Chic As Lady</strong></p>
          <p>Rp625.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Smooth Creamy Cake - Dannis" src="img/Dannis.jpg">
          <p class="model"><strong>Smooth Creamy Cake</strong></p>
          <p>Rp315.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Country Road - Esme" src="img/Country Road.jpg">
          <p class="model"><strong>Country Road</strong></p>
          <p>Rp820.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Logarithm Elegance - Tuneeca" src="img/Logarithm Elegance.jpg">
          <p class="model"><strong>Logarithm Elegance</strong></p>
          <p>Rp725.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img title="Fresh Orange Milk - Dannis" src="img/Dannis6.jpg">
          <p class="model"><strong>Fresh Orange Milk</strong></p>
          <p>Rp295.000</p>
          <button title="Add to Wishlist" class="btn btn-link1 glyphicon glyphicon-heart-empty"></button>
          <button title="Add to Cart" class="btn btn-link1 glyphicon glyphicon-shopping-cart"></button>
        </div>
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
          <form role="form" action="dataLogin.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> E-mail</label> <input class="form-control" name="email" placeholder="Email" type="email">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Password</label> <input class="form-control" name="password" placeholder="Password" type="password">
            </div>
            <button class="btn btn-default btn-success btn-block" type="submit" name="login">Login</button>
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