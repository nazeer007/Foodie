<?php
session_start();
include("connection.php");
error_reporting(0);
?>
<!doctype html>
<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="css/myprofile_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    </body>
</html>
<?php
    $userprofile = $_SESSION['user_name'];
    $query = "SELECT * FROM  ACCOUNTS WHERE Email='$userprofile'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    //echo $total;
    if($total != 0){
?>
        <?php
        while($result=mysqli_fetch_assoc($data)){
            ?>
                <h2>My Profile</h2>
                <hr>
        
                    <div class="profile_pic">
                    <table align="center">
                    <tr>
                        <td>
                            <?php 
                            echo "
                            <img src='".$result['user_image']."' height='200px' width='175px'>
                            ";
                            ?>

                        </td>
                    </tr>
                    </table>
                </div> 
       
                <table align="center">
                <tr>
                <th><a style="color:orangered;">Full Name</a></th>
                    <?php
                        echo "
                        <td>".$result['FullName']."</td>
                        ";
                    ?>
                </tr>
                <tr>
                    <th><a style="color:orangered;">Email</a></th>
                        <?php
                        echo "
                            <td>".$result['Email']."</td> 
                        ";
                        ?>
                </tr>
                <tr>
                    <th><a style="color:orangered;">Mobile Number</a></th>
                    <?php
                    echo "
                      <td>".$result['MobileNumber']."</td>
                      ";
                    ?>           
                </tr>
     
            </table>
     
                <?php
                echo"
                <p  align='center'><a href='myprofile_update.php?em=$result[Email]' style='color:white;'>";?><button>Update</button><?php echo "</a></p>
                ";
            ?>


        <?php
                }
            }
            else{
                echo "No records found";
            }
        ?>
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


