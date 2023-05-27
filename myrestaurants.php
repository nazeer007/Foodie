<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Available restaurants</title>
        <link rel="stylesheet" href="css/myrestaurants_design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>FOODIE</h1>
        <hr>
        <div class="topnav" id="myTopnav">
            <a href="foodie.php">Home</a>
        </div>

            <div class="row">
                <div class="column">
                    <br>
                    <a href="restaurant1.php"><img src="Restaurants/artisan-cafe-berea-ky.jpg" style="width:100%"></a>
                    <p><a style="color:orangered;"><b>Name :</b></a> Restaurant 1 </p>
                </div>
                <div class="column">
                    <br>
                    <a href="restaurant2.php"><img src="Restaurants/grestro.jpg" style="width:100%"></a>
                    <p><a style="color:orangered;"><b>Name :</b></a> Restaurant 2 </p>
                </div>
                <div class="column">
                    <br>
                    <a href="restaurant3.php"><img src="Restaurants/hlmg.jpg" style="width:100%"></a>
                    <p><a style="color:orangered;"><b>Name :</b></a> Restaurant 3 </p> 
                </div>
                <div class="column">
                    <br>
                    <a href="restaurant4.php"><img src="Restaurants/icnr.jpg" style="width:100%"></a>
                    <p><a style="color:orangered;"><b>Name :</b></a> Restaurant 4 </p>
                </div>
            </div>

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