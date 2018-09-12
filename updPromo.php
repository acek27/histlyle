<?php
include 'koneksi.php';
if($_POST['id']) {
        $ID = $_POST['id'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
        $query = "SELECT * FROM promotion WHERE idPromo = $ID";
        $result = mysqli_query($con, $query);
        foreach ($result as $data) {

        $sql="select * from brand order by id_brand";
        $brand= mysqli_query($con,$sql);

        $sql="select * from category order by idCategory";
        $category= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<body>      
            <form action="addPromo.php" enctype="multipart/form-data" method="POST" role="form">
            <div class="form-group">
            <label><span class="glyphicon glyphicon-qrcode"></span> Promotion ID</label> <input class="form-control" name="idPromo" type="text" value="<?php echo $data['idPromo']; ?>" readonly>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-barcode"></span> Promotion Code</label> <input class="form-control" name="kodePromo" value="<?php echo $data['kodePromo']; ?>" type="text">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-usd"></span> Discount</label><input class="form-control" name="disc" value="<?php echo $data['disc']; ?>" type="text">
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
            <label><span class="glyphicon glyphicon-picture"></span> Banner</label><input class="form-control" type="file" name="banner">
            </div>
            <button class="btn btn-default btn-success btn-block" name="edit" type="submit" style="margin-top:25px">Save Change</button></div>
          </form>
          <?php 
     }}
?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>