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
        <script src="res1.js"></script>
        <div class="title">
            <h1>FOODIE</h1>
            <hr>
        </div>
        <h2 align="center"><b>Dishes</b></h2>
        <form>
            <div class="row">
                <div class="column">
                    <img src="dishes1/aw-arancini-articleLarge.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> Aw-Arancini</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 70/-</p>
                    <p><a href="item1.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                 <img src="dishes1/chimichangs.jpg" style="width:100%">
                 <p><a style="color:orangered;"><b>Name :</b></a> Chimichangs</p>
                 <p><a style="color:orangered;"><b>Cost :</b></a> 50/- </p>
                 <p><a href="item2.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes1/choppsuey.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> Choppsuey</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="item3.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
                </div>
                <div class="column">
                    <img src="dishes1/curywurst.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> Curywurst</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 60/-</p>
                 <p><a href="item4.php"><input type="button" value="Order" name="submit" id="submit"></a></p>  
                </div>
                <div class="column">
                    <img src="dishes1/delish-fettuccine-alfredo.jpg" style="width:100%">
                    <p><a style="color:orangered;"><b>Name :</b></a> Delish-Fettuccine-Alfredo</p>
                    <p><a style="color:orangered;"><b>Cost :</b></a> 55/-</p>
                 <p><a href="item5.php"><input type="button" value="Order" name="submit" id="submit"></a></p>
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