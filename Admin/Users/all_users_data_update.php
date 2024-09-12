<?php
session_start();
//echo "Welcome ".$_SESSION["AdminLoginId"];
?>
<?php
include("../../Connection/connection.php");
session_start();

//echo $_GET['em'];
$id = $_GET['em'];

error_reporting(0);
$query= "SELECT * FROM ACCOUNTS WHERE Email='$id'";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data)
?>
<!Doctype html>
<html>
    <head>
        <title>Updating the details</title>
        <link rel="stylesheet" href="../../css/myprofile_update_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    <section>
    <div class="form-box">
        <form action="#" method="POST">
            <table>
            <tr>
                <tr>
                <th><label for="fullname">Full Name </label></th>
                <td><input type="text" id="fullname" value="<?php echo $result['FullName']?>" name="FullName" placeholder="Enter your Name"></td>
                </tr>
                <tr>
                <th><label for="email">Email </label></th>
                <td><input type="text" id="email" name="Email" value="<?php echo $result['Email'] ?>" placeholder="Enter your Email Id" ></td>
                </tr>
                <tr>
                <th><label for="phone">Mobile Number</label></th>
                <td><input type="number" min="0" id="qty" name="MobileNumber" value="<?php echo $result['MobileNumber']?>" placeholder="Enter your Phone No." ></td>
                </tr>
                <!--<tr>
                <th><label for="password">Password</label></th>
                <td><input type="text" id="password" name="Password" value="<?php echo $result['Password']?>"  readonly></td>
                </tr> -->
                <tr>
                <th>
                <td><input type="submit" value="Update Details" name="update"></td>
                </th>
                </tr>

            </tr>
                
            </table>
        </form>
</div>
</section>
    </body>
</html>
<?php
if($_POST['update']){
    $fullname=$_POST['FullName'];
    $email=$_POST['Email'];
    $phone=$_POST['MobileNumber'];
    $pswd=$_POST['Password'];

    $query = "UPDATE ACCOUNTS set FullName='$fullname',Email='$email',MobileNumber='$phone',Password='$pswd' WHERE Email='$id'";   
    $data=mysqli_query($conn,$query);
    if($data){
        echo "Successfully Updated";
    }
    else{
        echo "Ordered Failed";
    }
    if($data == true){
        header("location:all_users_data.php");
  
    }
}
?>
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
    