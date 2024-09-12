<?php
session_start();
echo "Welcome ".$_SESSION["AdminLoginId"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="../css/admin_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>Admin's Page</h1>
        <hr>
        <div class="topnav" id="myTopnav">
            <a href="Users/all_users_data.php">Users</a>
            <a href="Orders/all_orders_data.php">Orders</a>
        <a href="adminlogout.php"><input type="submit" value="logout"></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i>≡</i>
            </a> 
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
<?php
include("../Connection/connection.php");
error_reporting(0);

$userprofile = $_SESSION["AdminLoginId"];

if($userprofile == true){
    
}
else{
    header('location:admin_login.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    header('location:home_page.php');
}

?>
</html>
