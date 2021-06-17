<!DOCTYPE html>
<html>
<title>Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Travel in Thai</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://www.tripsavvy.com/thmb/zy8ynEXBMeUyTi2Sz2Md97dHd-I=/4085x2298/smart/filters:no_upscale()/railay-thailand-d1baa19e1a3b43c0a6283d23cc455b48.jpg" style="width:100%">
  <img class="mySlides" src="https://www.traveldailymedia.com/assets/2021/01/thailand-travel-2.jpg" style="width:100%">
  <img class="mySlides" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_630,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/p146w6uttdhbo7lozevv/Bangkok%20Private%20Car%20Charter%20(4,%206,%208,%2010,%20or%2012%20Hours)%20by%20Thai%20Travel%20Service.jpg" style="width:100%">
  <img class="mySlides" src="https://img.theculturetrip.com/450x/smart/wp-content/uploads/2021/02/2atw40p.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
