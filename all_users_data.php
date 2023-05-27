<?php
session_start();
//echo "Welcome ".$_SESSION["AdminLoginId"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Display</title>
        <link rel="stylesheet" href="css/all_users_data.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>All Users</h1>
<?php
include("connection.php");
error_reporting();
$query= "SELECT * FROM ACCOUNTS";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
//echo $total;
if($total !=0){
    ?>
    <table align="center" border="1px">
        <tr>

            <th>User Image</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Edit</th>
        </tr>
    <?php
    while($result= mysqli_fetch_assoc($data)){

        echo "<tr>
              <td><img src='".$result['user_image']."' height='100px' width='85px'></td>


              <td>".$result['FullName']."</td>
              <td>".$result['Email']."</td>
              <td>".$result['MobileNumber']."</td>
              <td><a href='all_users_data_update.php?em=$result[Email]'><button>Update</button></a></td>
              
              </tr> 
            ";
    }
}
else{
    echo "No records found";
}
?>
</table>
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