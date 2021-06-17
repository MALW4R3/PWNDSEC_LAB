<?php
    session_start();
    include('server.php'); 
?>


<!DOCTYPE html>
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<style>
            body{
                background-color: black;
                color: #fff;
            }
            /* helpers/alignment.css */

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* helpers/icon.css */

.icon {
  font-size: 2rem;
}

/* layout/base.css */

html {
  height: 100%;
}

body {
  color: #888;
  font-family: sans-serif;
  line-height: 1.5;
  margin: 0;
  min-height: 100%;
}

/* modules/headline.css */

h3 {
  font-size: 1.5rem;
  margin-top: 1.5em;
  color: #fff;
  margin-bottom: 1.5em;
}
h4 {
  font-size: 1.5rem;
  margin-top: 1.5em;
  color: red;
  margin-bottom: 1.5em;
}

/* modules/paragraph.css */

p {
  margin-bottom: 1.5em;
  margin-top: 1.5em;
}

/* modules/form.css */

input {
  font: inherit;
  outline: 0;
}

.form__field {
  position: relative;
}

.form__field .icon {
  position: absolute;
  right: 1em;
  top: 50%;
  transform: translateY(-50%)
}

.form__input {
  border-radius: 0.25em;
  border-style: solid;
  border-width: 2px;
  font-size: 1.5rem;
  padding: 0.5em 4em 0.5em 2em;
}

.form__input:valid {
  border-color: forestgreen;
}

.form__input:valid + .icon::after {
  content: '😃';
}

.form__input:invalid {
  border-color: firebrick;
}

.form__input:invalid + .icon::after {
  content: '😳';
}
            .btn{
  color: #fff;
  border: none;
  margin: 20px;
  padding: 20px 30px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 4px;
  cursor: pointer;
  border-radius: 5px;
  transition: 0.5s;
  transition-property: box-shadow;
}

.btn-primary{
  background: #50A7FF;
  box-shadow: 0 0 25px #50A7FF;
}

.btn-primary:hover{
  box-shadow: 0 0 5px #50A7FF,
              0 0 25px #50A7FF,
              0 0 50px #50A7FF,
              0 0 100px #50A7FF;
}

.btn-success{
  background: #03D29F;
  box-shadow: 0 0 25px #03D29F;
}

.btn-success:hover{
  box-shadow: 0 0 5px #03D29F,
              0 0 25px #03D29F,
              0 0 50px #03D29F,
              0 0 100px #03D29F;
}

.btn-danger{
  background: #FF7675;
  box-shadow: 0 0 25px #FF7675;
}

.btn-danger:hover{
  box-shadow: 0 0 5px #FF7675,
              0 0 25px #FF7675,
              0 0 50px #FF7675,
              0 0 100px #FF7675;
}

.btn-warning{
  background: #F0DF51;
  box-shadow: 0 0 25px #F0DF51;
}

.btn-warning:hover{
  box-shadow: 0 0 5px #F0DF51,
              0 0 25px #F0DF51,
              0 0 50px #F0DF51,
              0 0 100px #F0DF51;
}
.container  {
			 margin-top: 100px;
			 border: 1px solid #9C9C9C;
			 background-color: #000;
			 padding:30px;
             color: #fff;
         }    
		 .container h2{
			margin-bottom:25px;
		 }
		 .text-info {
			color: #fff !important;
		}
            </style>
<html lang="en">
    <style>
    .masg {
       color: red;
    }
    </style>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap');
            </style>
			<font face="Kanit">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PWNDSEC LAB</title>
	<link rel="stylesheet" href="css/bootstrap4-neon-glow.css">
	<link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/hover.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="/assets/css/dark.css">
	<script src="/assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
</head>
<body>
    <center>
	<div class="card wow fadeInUp">
		<div class="card-body">
        <h2>ADMIN LOGIN</h2>
    </div>
    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="masg">
        <h4>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h4>
            </div>
        <?php endif ?>
        <div class="form-group">
         <h3>username</h3>
            <input type="text" name="username" class="form__input" pattern=".{6,}" required>
            <span class="icon"></span>
        </div>
        <div class="form-group">
            <h3>Password</h3>
            <input type="password" name="password" class="form__input" pattern=".{6,}" required>
            <span class="icon"></span>
        </div>
        <div class="form-group">
        <button type="submit" name="login_user" class="my-2 btn btn-success">ตกลง</button>
        </div>
        </div>
        </div>
        </div>
        </div>
</body>
</html>
