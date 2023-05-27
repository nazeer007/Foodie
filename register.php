<?php
session_start();
?>
<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/register_design.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <section>
            <div class="form-box">
                <div class="form-value">
                    <h2>Register</h2>
                    <div class="profile_image">
                        <label>Upload Profile :</label> 
                        <input type="file" name="uploadfile" accept="image/jpeg, image/png" multiple="false" onchange="limitToOneImage(event)" required>

                        <script>
                            function limitToOneImage(event) {
                              const input = event.target;
                              if (input.files.length > 1) {
                                alert("Please select only one image.");
                                input.value = ''; // Reset the selected files
                              }
                            }
                        </script>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="FullName"  autocomplete="off" required>
                        <label>Full Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="Email"  autocomplete="off" required>
                        <label>Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="phone"></ion-icon>
                        <input type="number" name="MobileNumber"  autocomplete="off" required>
                        <label>Mobile Number</label>
                    </div>
                    <div class="inputbox">
                        <div class="pswd">
                        <img src="icons/icons8-hide-90.png" onclick="pass()" class="pass-icon" id="pass-icon">
                            <!--<ion-icon name="lock-closed-outline"></ion-icon>-->
                            <input type="password" name="Password" id="password"  autocomplete="off" required>
                            <label>Password</label>
                        </div>
                        <script>
                            var a;
                            function pass(){
                                if(a == 1){
                                    document.getElementById("password").type="password";
                                    document.getElementById("pass-icon").src="icons/icons8-hide-90.png";
                                    a=0;
                                }
                                else{
                                    document.getElementById("password").type="text";
                                    document.getElementById("pass-icon").src="icons/icons8-eye-90.png";
                                    a=1;  
                                }
                            }
                        </script>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="ConfirmPassword" required>
                        <label>Confirm Password</label>
                    </div>
                    <input type="submit" id="submit" name="register" value="Register">

                    <div class="register">
                        <p>Already have an account ? <a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fn=$_POST['FullName'];
    $em=$_POST['Email'];
    $phone=$_POST['MobileNumber'];
    $pwd=md5($_POST['Password']);
    $cpwd= md5($_POST['ConfirmPassword']);
    if($pwd == $cpwd){  
        
        //print_r($_FILES["uploadfile"]);
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;
        //echo $folder;
        move_uploaded_file($tempname, $folder);
        
        if($fn !="" && $em!="" && $phone !="" && $pwd !=""){
            $query="INSERT INTO ACCOUNTS(user_image,FullName,Email,MobileNumber,Password) VALUES ('$folder','$fn','$em','$phone','$pwd')";
            $data=mysqli_query($conn,$query);


            if($data)
            {
                //echo "Data Inserted into Data base";
                ?><script>
                alert("Your Account has been Created Successfully.");
                </script><?php
            }
            else
            {
                ?><script>
                alert("Failed to create your Account.");
                </script><?php
            }
        }
    }
    else{
        ?><script>
        alert("Password doesn't match.");
    </script><?php
    }
} 
?>
