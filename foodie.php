<?php
session_start();
echo "Welcome ".$_SESSION['user_name'];
?>
<!doctype html>
<html>
    <head>
        <title>
            Welcome to Foodie...
        </title>
        <link rel="stylesheet" href="css/foodie.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>F O O D I E</h1>
        <hr>
        <div class="topnav" id="myTopnav">
            <a href="about.php">About</a>
            <a href="myprofile.php">Profile</a>
            <a href="myorders.php">Orders</a>
            <a href="myrestaurants.php">Restaurants</a>
            <div class="logout">
                <a href="logout.php"><input type="submit" value="logout"></a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i>≡</i>
            </a>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Special dishes/chicken_biryani.jpg.png" style="width:100%; height:60%;">
                <div class="text"><b>Chicken Biryani</b></div>
            </div>
            <div class="mySlides fade">
                <img src="Special dishes/Mutton-and-curry-leaves-biryani.jpg" style="width:100%; height:60%;">
                <div class="text"><b>Mutton Biryani</b></div>
            </div>  
            <div class="mySlides fade">
                <img src="Special dishes/Fish-Biryani-from-India.png" style="width:100%; height:60%;">
                <div class="text"><b>Fish Biryani</b></div>
            </div>
            <div class="mySlides fade">
                <img src="Special dishes/Prawn-Biryani-Recipe.jpg" style="width:100%; height:60%;">
                <div class="text"><b>Prawn Biryani</b></div>
            </div> 
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span>
        </div> 
        <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


let slideIndex = 0;
showSlides();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
    </body>
</html> 
<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile == true){
    
}
else{
    header('location:login.php');
}
?>
