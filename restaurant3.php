<?php
include('connection.php');
error_reporting(0);
SESSION_START();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/all_restaurants_design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>FOODIE</h1>
        <hr>
        <h2 align="center"><b>Dishes</b></h2>
        <form>
            <div class="row">
                <div class="column">
                    <img src="dishes 3/igcsan.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>igcsan</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 70/-</p>
                    <p><a href="res3_item1.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                 <img src="dishes 3/mldessert.jpeg" style="width:100%">
                 <p><a style="color:orangered;"><b>Name :</b></a>mldessert</p>
                 <p><a style="color:orangered;"><b>Cost :</b></a> 50/- </p>
                 <p><a href="res3_item2.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 3/mozzsticks.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>mozzsticks</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res3_item3.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 3/Pappardelle.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>Pappardelle</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 60/-</p>
                 <p><a href="res3_item4.php"><input type="button" value="Order" name="submit" id="submit"></a></p>  
                </div>
                <div class="column">
                    <img src="dishes 3/philly-cheesesteak-3c4be15.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>philly-cheesesteak</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res3_item5.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 3/poboy.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>poboy</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res3_item6.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
            </div>
        </form>
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