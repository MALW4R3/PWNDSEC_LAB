<html>
<head>
<title>PING IP ONLINE</title>
<META http-equiv=Content-Type content=text/html; charset= ISO-8859-1>
<style>
            @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap');
            </style>
              <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="particles-js"></div>
<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
<font face="kanit">
<center>
<form action="" method="post">
<h1>PING IP ONLINE</h1>
<div class="form-row align-items-center">
IP<input type="text" class="form-control mb2" name="ip" onkeyup="lettersOnly(this)"><br>
<input type="submit" class="btn btn-success-outline">
<pre>
<?php 
if (isset($_POST['ip'])) {
    $a = $_POST["ip"];
    $cmd = system( 'ping ' . $a );

        if (empty($a)) {
            $cmd = system( 'echo PLEASE ENTER IP' . $a );
        }
    }
?>
</pre>
</div>
</form>
</body
</html>
