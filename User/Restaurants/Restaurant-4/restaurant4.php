<?php
include("../../../Connection/connection.php");
error_reporting(0);
SESSION_START();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../../../css/all_restaurants_design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <h1>FOODIE</h1>
    <hr>
        <h2 align="center"><b>Dishes</b></h2>
        <form>
            <div class="row">
                <div class="column">
                    <img src="dishes 4/reubensandw.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>reubensandw</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 70/-</p>
                    <p><a href="res4_item1.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                 <img src="dishes 4/roast-beef-sandwich.jpg" style="width:100%">
                 <p><a style="color:orangered;"><b>Name :</b></a>roast-beef-sandwich</p>
                 <p><a style="color:orangered;"><b>Cost :</b></a> 50/- </p>
                 <p><a href="res4_item2.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 4/spCarbonara.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>spCarbonara</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res4_item3.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 4/sschicken.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>sschicken</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 60/-</p>
                 <p><a href="res4_item4.php"><input type="button" value="Order" name="submit" id="submit"></a></p>  
                </div>
                <div class="column">
                    <img src="dishes 4/stkkk.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>stkkk</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res4_item5.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes 4/turkey-fajitas.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a>turkey-fajitas</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="res4_item6.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
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