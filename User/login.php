<?php
session_start();
include("../Connection/connection.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pwd = md5($_POST['password']);

    $query = "SELECT * FROM  ACCOUNTS WHERE Email ='$email' && Password ='$pwd'";
    $data = mysqli_query($conn,$query);

    $total=mysqli_num_rows($data);
    //echo $total;
    if($total > 0){
        //echo "Login Success";
        $_SESSION['user_name'] = $email;
        header('location:foodie.php');
        exit();
    }
    else{
        ?><script>
        alert("Login Failed.");
    </script><?php
        //echo "Login Failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/login_design.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email"  autocomplete="off" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <div class="pswd">
                            <img src="../icons/icons8-hide-90.png" onclick="pass()" class="pass-icon" id="pass-icon">
                            <input type="password" name="password" id="password" autocomplete="off" required>
                            <label for="pswd">Password</label>
                        </div>

                        <!--<ion-icon name="lock-closed-outline"></ion-icon>-->
                        <script>
                            var a;
                            function pass(){
                                if(a == 1){
                                    document.getElementById("password").type="password";
                                    document.getElementById("pass-icon").src="../icons/icons8-hide-90.png";
                                    a=0;
                                }
                                else{
                                    document.getElementById("password").type="text";
                                    document.getElementById("pass-icon").src="../icons/icons8-eye-90.png";
                                    a=1;  
                                }
                            }
                        </script>
                    </div>
                    <input type="submit" name="login" value="Login">
                    
                    
                    <div class="register">
                        <p>Don't have a account ? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php

?>