<?php
include 'koneksi.php';
if($_POST['uid']) {
        $ID = $_POST['uid'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
        $query = "SELECT * FROM produk WHERE idProduk = $ID";
        $result = mysqli_query($con, $query);
        foreach ($result as $data) {

        $sql="select * from brand order by id_brand";
        $brand= mysqli_query($con,$sql);

        $sql="select * from category order by idCategory";
        $category= mysqli_query($con,$sql);
        
        $sql="select * from size order by idSize";
        $size= mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<body>
          <form role="form" action="addProduct.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-qrcode"></span> Product ID</label> <input class="form-control" name="idProduk" type="text" value="<?php echo $data['idProduk']; ?>" readonly>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-tag"></span> Product Name</label> <input class="form-control" name="nama" value="<?php echo $data['nama']; ?>" type="text">
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
            <?php
        $query = "SELECT * FROM produk WHERE idProduk = $ID";
        $result = mysqli_query($con, $query);
        foreach ($result as $data) {
        ?>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-list"></span> Detail</label> <textarea class="form-control" name="detail" type="text" rows="3"><?php echo $data['detail']; ?></textarea>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-font"></span> Size</label>
              <?php while ($data = mysqli_fetch_array($size)){?>
              <label><input type="radio" name="size" value="<?php echo $data['idSize'];?>" style="margin-left: 20px"> <?php echo $data['character'];?></label>
              <?php } ?>
            </div>
        <?php
        $query = "SELECT * FROM produk WHERE idProduk = $ID";
        $result = mysqli_query($con, $query);
        foreach ($result as $data) {
        ?>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-usd"></span> Price</label><input class="form-control" name="price" value="<?php echo $data['price']; ?>" type="text">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-download-alt"></span> Stock</label><input class="form-control" name="stok" value="<?php echo $data['stok']; ?>" type="number">
            </div>
            <div class="form-group">
            <label><span class="glyphicon glyphicon-picture"></span> Image</label><input class="form-control" type="file" name="gambar" value="<?php echo $data['gambar']; ?>">
            </div>
            <button class="btn btn-default btn-success btn-block" name="edit" type="submit" style="margin-bottom: 20px">Save Change</button>
          </form>
          <?php 
     }
  }    }}
?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>