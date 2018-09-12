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
  <div class="container" style="margin-top: 11%; margin-bottom: 1%">
    <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="text-align: center">Product</h3>
        </div>
        <div class="panel-body">
          <button class="btn btn-success" style="margin-bottom: 20px" data-toggle="modal" href="#myModal"><span class="glyphicon-plus">Add Product</span></button>
          <a class="btn btn-success" style="margin-bottom: 20px; margin-left: 20px" href="promo.php"><span class="glyphicon-plus">Add Promotion</span></a>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Brand</th>
                  <th>Category</th>
                  <th>Detail</th>
                  <th>Size</th>
                  <th>Price</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <?php
                  $query ="select p.idProduk, p.nama, b.namaBrand, c.namaCategory, p.detail, s.character, p.price, p.stok from category c join produk p on c.idCategory=p.idCategory join  brand b on p.id_brand = b.id_brand join size s on p.idSize=s.idSize";
                  $result =mysqli_query($con,$query);
                  //if (!$result) {
                    //printf(mysqli_error($con));
                  //}
                  while ($data = mysqli_fetch_array($result)){
              ?>
              <tbody>
                <tr>
                  <td><?php echo $data['idProduk']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['namaBrand']; ?></td>
                  <td><?php echo $data['namaCategory']; ?></td>
                  <td><?php echo $data['detail']; ?></td>
                  <td><?php echo $data['character']; ?></td>
                  <td>Rp<?php echo number_format($data['price'],2,",","."); ?></td>
                  <td><?php echo $data['stok']; ?></td>
                  <td><a class="btn btn-primary" data-toggle="modal" href="#myModal1" data-id="<?php echo $data['idProduk'];?>"><span class="glyphicon glyphicon-pencil" title="Edit"></span></a></td>
                  <td><a class="btn btn-danger" href="addProduct.php?idProduk=<?php echo $data['idProduk'];?>"><span class="glyphicon glyphicon-trash" title="Delete"></span></a></td>
                </tr>
                <?php
  }
  ?>
              </tbody>
            </table>
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
  </footer>
  <?php
    $sql="select * from brand order by id_brand";
    $brand= mysqli_query($con,$sql);

    $sql="select * from category order by idCategory";
    $category= mysqli_query($con,$sql);

    $sql="select * from size order by idSize";
    $size= mysqli_query($con,$sql);
  ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">&times;</button>
          <h3 style="color:black;">Add Product</h3>
        </div>
        <div class="modal-body">
          <form role="form" action="addProduct.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-tag"></span> Product Name</label> <input class="form-control" name="nama" placeholder="Product Name" type="text">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-certificate"></span> Brand</label> <select class="form-control" name="brand"> <?php while ($data = mysqli_fetch_array($brand)){?>
                <option value="<?php echo $data['id_brand'];?>"><?php echo $data['namaBrand'];?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label><span class="glyphicon glyphicon-paperclip"></span> Category</label> <select class="form-control" name="category">
                <?php while ($data = mysqli_fetch_array($category)){?>
                <option value="<?php echo $data['idCategory'];?>"><?php echo $data['namaCategory'];?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-list"></span> Detail</label> <textarea class="form-control" name="detail" placeholder="Detail" type="text" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-font"></span> Size</label>
              <?php while ($data = mysqli_fetch_array($size)){?>
              <label><input type="radio" name="size" value="<?php echo $data['idSize'];?>" style="margin-left: 20px"> <?php echo $data['character'];?></label>
              <?php } ?>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-usd"></span> Price</label><input class="form-control" name="price" placeholder="Price" type="text">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-download-alt"></span> Stock</label><input class="form-control" name="stok" placeholder="Stock" type="number">
            </div>
            <div class="form-group">
            <label><span class="glyphicon glyphicon-picture"></span> Image</label><input class="form-control" type="file" name="gambar">
            </div>
            <button class="btn btn-default btn-success btn-block" name="add" type="submit" style="margin-bottom: 20px">Add Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal1" role="dialog" name="myModal1">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">&times;</button>
          <h3 style="color:black;">Edit Product</h3>
        </div>
        <div class="modal-body">
          <div class="fetched-data"></div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal1').on('show.bs.modal', function (e) {
            var uid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'updProduct.php',
                data :  'uid='+ uid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
</body>
</html>