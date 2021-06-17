<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>S3CM155C0NF1G</title>
      <link href="style.css" rel="stylesheet">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">      
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PWNDSEC LAB</title>
	<link rel="stylesheet" href="../css/bootstrap4-neon-glow.css">
	<link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/hover.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../assets/css/dark.css">
	<script src="../assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    </head>
   <body>
   <center>
      <h1>SECMISS ENTERPRISE LOGIN</h1>          
         <?php

$meserror="<script>
Swal.fire('Oops...', 'username หรือ password ไม่ถูกต้อง', 'error')
</script>";

$messuc="<script>Swal.fire(
    'SUCCESS!',
    'เข้าสู่ระบบสำเร็จ!',
    'success'
  )</script>";

            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'S3CuR3P@SSW0RD') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo "$messuc";
                  header('location: index.php');
               }else {
                  echo "$meserror";
               }
            }
         ?>
      <div class="card wow fadeInUp">
		<div class="card-body">
      <h1>LOGIN</h1>
    </div>
    <form role="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <div class="form-group">
         <h3>username</h3>
            <input type="text" name="username" class="form__input" pattern=".{4,}" required>
            <span class="icon"></span>
        </div>
        <div class="form-group">
            <h3>Password</h3>
            <input type="password" name="password" class="form__input" pattern=".{6,}" required>
            <span class="icon"></span>
        </div>
        <div class="form-group">
        <button type="submit" name="login" class="my-2 btn btn-success">ตกลง</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        default username : admin<br>
        default password : S3CuR3P@SSW0RD
   </body>
</html>