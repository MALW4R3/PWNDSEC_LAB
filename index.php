<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link  rel="stylesheet" href="css/swiper.min.css"/>
<link  rel="stylesheet" href="style.css"/>
<meta charset="utf-8">
<style>
            body{
                background-color: black;
                color: #fff;
            }

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}


.icon {
  font-size: 2rem;
}

/* layout/base.css */

html {
  height: 100%;
}

body {
  color: #fff;
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
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap');
            </style>
</head>
<center>
    <font face="Kanit">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
          <h1> <span id="anim"></span><span id="shuffle"></span></h1>
  <center>
            <p>welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <div class="heading">
<h1>💉 S Q L &emsp; I N J E C T I O N</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">SQL INJECTION</p>
<div class="img-box">
<a href="/sqli" ><img src="https://cdn3.iconfinder.com/data/icons/web-and-hacker-technology/50/14-512.png"></a>
</div>
</div>  
      </div>
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">SQL INJECTION BYPASS AUTH</p>
<div class="img-box">
<a href="/sqli/sqlibypassauth/logout.php"><img src="https://cdn3.iconfinder.com/data/icons/web-and-hacker-technology/50/14-512.png"></a>
</div>
</div>
      </div>
      </div>
      </div>
      <div class="heading">
<h1>🐱‍👤 X S S</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">XSS DOM</p>
<div class="img-box">
<a href="/xss/dom" ><img src="https://miro.medium.com/max/677/1*9dGlqYIZkmMSMh8zMI_oiQ.png" width="200" height="200"></a>
</div>
</div>  
      </div>
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">XSS REFLECTED</p>
<div class="img-box">
<a href="/xss/xssrf"><img src="https://miro.medium.com/max/677/1*9dGlqYIZkmMSMh8zMI_oiQ.png" width="200" height="200"></a>
</div>
</div>
      </div>
      </div>
      </div>
      <div class="heading">
<h1>👾 W E B&emsp;S H E L L</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">Arbitrary File Upload</p>
<div class="img-box">
<a href="/uploadshell" ><img src="https://www.pngrepo.com/png/112825/512/cloud-upload-signal.png"></a>
</div>
</div>
      </div>
      </div>
</div>  
      </div>
      </div>
      <div class="heading">
<h1>📂 F I L E &emsp; I N C L U S I O N</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">LOCAL FILE INCLUSION</p>
<div class="img-box">
<a href="/lfi/local" ><img src="https://img.icons8.com/plasticine/2x/folder-invoices.png"></a>
</div>
</div>  
      </div>
      </div>
      </div>
      </div>
      <div class="heading">
<h1>⚙ S E C U R I T Y &emsp; M I S S&emsp; C O N F I G U R A T I O N</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">SECURITY MISS CONFIGURATION</p>
<div class="img-box">
<a href="/missconf/logout.php" ><img src="/img/process.png"></a>
</div>
</div>  
      </div>
      </div>
      </div>
      </div>
      <div class="heading">
<h1>💔 B R O K E N &emsp; A C C E S S&emsp; C O N T R O L</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">BROKEN ACCESS CONTROL</p>
<div class="img-box">
<a href="/broken/login.php" ><img src="/img/broken-shield.png"></a>
</div>
</div>  
      </div>
      </div>
      </div>
      </div>
      <div class="heading">
<h1>💻 O S&emsp; C O M M A N D&emsp; I N J E C T I O N</h1>

</div>
<!--swiper slider-->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <!--slide 1-------------------------------------->
      <div class="swiper-slide">
      <div class="slider-box">
<p class="time">OS COMMAND INJECTION</p>
<div class="img-box">
<a href="/oscommand/" ><img src="/img/console.png"></a>
</div>
</div>  
      </div>
      </div>
      </div>
      </div>
            <p><a href="index.php?logout='1'" class="my-2 btn btn-danger">logout</a></p>      
<script>
  var $ = function(id) {
  return document.getElementById(id);
};
var inc = 0;
var out = 0;
var str = 'ยินดีต้อนรับ เข้าสู่ LAB PWNDSEC';
var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@$%&';
var t;

var anim = function() {
  inc++;
  if (inc % 7 === 0 && out < str.length) {
    $('anim').appendChild(document.createTextNode(str[out]));
    out++;
  } else if (out >= str.length) {
    $('shuffle').innerHTML = '';
    removeInterval(t);
  }
  $('shuffle').innerHTML =
    chars[Math.floor(Math.random() * chars.length)];
};
t = setInterval(anim, 50);
$('anim').innerHTML = '';

//Do it again
function reload() {
  window.location.href = window.location.href;
}
document.getElementById('btn').onclick = reload;
  </script>
        <?php endif ?>
    </div>
</body>
</html>     
<script type="text/javascript" src="js/swiper.min.js"></script>
<script src="js/script.js"></script>