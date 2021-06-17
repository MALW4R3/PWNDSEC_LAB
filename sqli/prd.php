<?php
include("condb.php");
$p_id = $_GET["id"];
?>
<!DOCTYPE html>
<head>
  <?php include('boot4.php');?>
  <style>
  * {
  box-sizing: border-box;
  }
  .zoom {
  padding: 50px;
  transition: transform .2s;
  width: 400px;
  height: 400px;
  margin: 0 auto;
  }
  .zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
  }
  </style>
</head>
<body>
  <?php
  include('navbar.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php
        include("menu.php");
        ?>
      </div>
      
      <?php
      $sql = "SELECT * FROM tbl_product as p, tbl_type as t
      WHERE  p.type_id=t.type_id
      AND p_id = $p_id
      ";
      $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);
      ?>
      <div class="col-md-10">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <div class="col-md-6">
              <div class="zoom">
                <?php echo"<img src='images/".$row['p_img']."'width='100%'>";?>
              </div>
            </div>
            <div class="col-md-6">
              <h3><b><?php echo $row["p_name"];?></b></h3>
              <p>
                ประเภท <?php echo $row["type_name"];?>
                <br>
                ราคา <font color="red"> <?php echo $row["p_price"];?> </font>
              </p>
              <?php echo $row["p_detail"];?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php include('script4.php');?>