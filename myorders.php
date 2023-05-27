<?php
include("connection.php");
session_start();

//echo "Welcome ".$_SESSION['user_name'];
?>
<?php
$userprofile = $_SESSION['user_name'];
?>
<html>
    <head>
        <title>My Orders</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/myorders_style.css">
    </head>
   
<body>
    <h2>My Orders</h2>
    <hr>
    <div class="topnav" id="myTopnav">
            <a href="foodie.php">Home</a>

            </a>
        </div>
    <div class="row">
        <div class="column">
            <div class="res1"><a href="res1_myorders.php">
                <button>
                    <h3>Restaurant 1</h3>
                    <b>Orders :</b>
                    <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM RESTAURANT01 WHERE email='$userprofile'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT01 WHERE email='$userprofile' && Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a></div>
        </div>
        <div class="column">
            <div class="res2"><a href="res2_myorders.php">
                <button>
                    <h3>Restaurant 2</h3>
                        <b>Orders :</b>
                        <?php
                        include("connection.php");
                        error_reporting(0);
                        $query= "SELECT * FROM RESTAURANT2 WHERE email='$userprofile'";
                        $data= mysqli_query($conn,$query);
                        $total= mysqli_num_rows($data);
                        echo $total;
                        ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT2 WHERE email='$userprofile' && Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button>
            </a>
            </div>
        </div>
        <div class="column">
            <div class="res3"><a href="res3_myorders.php">
                <button>
                    <h3>Restaurant 3</h3>
                        <b>Orders :</b>
                        <?php
                        include("connection.php");
                        error_reporting(0);
                        $query= "SELECT * FROM RESTAURANT03 WHERE email='$userprofile'";
                        $data= mysqli_query($conn,$query);
                        $total= mysqli_num_rows($data);
                        echo $total;
                        ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT03 WHERE email='$userprofile' && Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button></a>
            </div>
        </div>
        <div class="column">
            <div class="res4"><a href="res4_myorders.php">
                <button>
                    <h3>Restaurant 4</h3>
                        <b>Orders :</b>
                        <?php
                        include("connection.php");
                        error_reporting(0);
                        $query= "SELECT * FROM RESTAURANT04 WHERE email='$userprofile'";
                        $data= mysqli_query($conn,$query);
                        $total= mysqli_num_rows($data);
                        echo $total;
                        ?>
                    <br><br>
                    <b>Pending :</b>
                    <?php
                    $query= "SELECT * FROM RESTAURANT04 WHERE email='$userprofile' && Status='Not Delivered'";
                    $data= mysqli_query($conn,$query);
                    $total= mysqli_num_rows($data);
                    echo $total;
                    ?>
                </button></a>
            </div>
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
