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
        <h1 align="center">FOODIE</h1>
        <hr>
        <h2 align="center"><b>Dishes</b></h2>
        <form>
            <div class="row">
                <div class="column">
                    <img src="dishes 2/detroitpzz.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> detroitpzz</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 70/-</p>
                    <p><a href="res2_item1.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                 <img src="dishes 2/ffries.jpg" style="width:100%">
                 <p><a style="color:orangered;"><b>Name :</b></a> ffries</p>
                 <p><a style="color:orangered;"><b>Cost :</b></a> 50/- </p>
                 <p><a href="res2_item2.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 2/fried-ravioli-bread-crumbs.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> fried-ravioli-bread-crumbs</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res2_item3.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 2/hdoggg.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> hdogg</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 60/-</p>
                 <p><a href="res2_item4.php"><input type="button" value="Order" name="submit" id="submit"></a></p>  
                </div>
                <div class="column">
                    <img src="dishes 2/hmbrger.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> hmbrger</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res2_item5.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
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