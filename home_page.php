<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="css/home_page_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>FOODIE</h1>
        <hr>
        <div class="topnav" id="myTopnav">
            <a href="about_page.php">About</a>
            <a class="active" href="User/login.php">User</a>
            <a href="Admin/admin_login.php">Admin</a>
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
</html>
