<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home Page - ADMIN PANEL</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link  rel="stylesheet" href="css/swiper.min.css"/>
    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>
  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Welcome <?php echo $_SESSION["username"]; ?>!! You are now logged in!</a>
			</p>
        </div>	  <div class="footer">
		<a href="file.php">จัดการไฟล์</a></form>

		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
		<p>PWNDSEC</p>
      </div>

	</div> <!-- /container -->
  
</body>
</html>