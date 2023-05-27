<?php
session_start();
//echo "Welcome ".$_SESSION["AdminLoginId"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Orders Data</title>
    <link rel="stylesheet" href="css/admin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <h1>All Orders</h1>
    <hr>
    <div class="topnav" id="myTopnav">
            <a href="admin.php">Home</a>

        </div>
    <div class="row">
        <div class="column">
        <div class="res1">
            <a href="res1_allorders.php">
                <button>
                    <h3>Restaurant 1</h3>
                    <b>Orders :</b>
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM RESTAURANT01";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT01 WHERE Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a>
            </div>
        </div>
        <div class="column">
            <div class="res2">
            <a href="res2_allorders.php">
                <button>
                    <h3>Restaurant 2</h3>
                    <b>Orders :</b>
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM RESTAURANT2";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT2 WHERE Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a>
            </div>
        </div>
        <div class="column">
            <div class="res3">
            <a href="res3_all_orders.php">
                <button>
                    <h3>Restaurant 3</h3>
                    <b>Orders :</b>
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM RESTAURANT03";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT03 WHERE Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a>
            </div>
        </div>
        <div class="column">
            <div class="res4">
            <a href="res4_all_orders.php">
                <button>
                    <h3>Restaurant 4</h3>
                    <b>Orders :</b>
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM RESTAURANT04";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT04 WHERE Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a>
            </div>
        </div>
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
        </script>
</body>
</html>
<?php
include("connection.php");
error_reporting(0);

$userprofile = $_SESSION["AdminLoginId"];

if($userprofile == true){
    
}
else{
    header('location:admin_login.php');
}
?>  

