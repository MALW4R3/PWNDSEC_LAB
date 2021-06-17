<?php session_start();?>
<?php
include("condb.php");
?>
<!DOCTYPE html>
<head>
  <?php include('boot4.php');?>
</head>
<body>
  <?php
  include('navbar.php');
  //include("slide.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php
        include("menu.php");
        ?>
      </div>
      <div class="col-md-10">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <?php
            include('show_product.php');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php include('script4.php');?>