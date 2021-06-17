<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ADMIN LOGIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link  rel="stylesheet" href="css/swiper.min.css"/>
  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				ADMIN PAGE
			</p>
        </div>
		
		<div class="response">
		<form method="POST" autocomplete="off">
<div class="container">
  <h2>LOGIN</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="uid">Username:</label>
      <input type="text" class="form-control" id="uid" placeholder="Enter Username" name="uid">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
    
        
		<br />
		
      <div class="row marketing">
        <div class="col-lg-6">

<?php

$meserror="<script>
Swal.fire('Oops...', 'username หรือ password ไม่ถูกต้อง', 'error')
</script>";

$messuc="<script>Swal.fire(
	'SUCCESS!',
	'เข้าสู่ระบบสำเร็จ!',
	'success'
  )</script>";


if (!empty($_GET['msg'])) {
}
//echo md5("pa55w0rd");

if (!empty($_REQUEST['uid'])) {
$username = ($_REQUEST['uid']);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM sqli where username='".$username."' AND password = '".md5($pass)."'" ;
//echo $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {
	
	$row = mysqli_fetch_array($result);
	
	if ($row){
	//$_SESSION["id"] = $row[0];
	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];
	//ob_clean();
	echo "$messuc";
	header('Location:home.php');
	}
}
	else{
		echo "$meserror";
		
	}
}

//}
?>

	</div>
	</div>
	  
	  
	  <div class="footer">
		<p>PWNDSEC</p>
      </div>
	</div> <!-- /container -->
  
</body>
</html>