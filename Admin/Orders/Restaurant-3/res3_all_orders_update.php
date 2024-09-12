<?php
session_start();

include("../../../Connection/connection.php");
//echo $_GET['em'];
$id = $_GET['em'];

error_reporting(0);
$query= "SELECT * FROM restaurant03 WHERE id='$id'";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

$result= mysqli_fetch_assoc($data)
?>
<!Doctype html>
<html>
    <head>
        <title>Updating the details</title>
        <link rel="stylesheet" href="../../../css/admin_all_orders_update_design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <section>
    <div class="form-box">
        <form action="#" method="POST">
            <table>
            <tr>
                <th><label for="item">Item </label></th>
                <td><input type="text" value="<?php echo $result['item'] ?>" id="item" name="item" style="border:none" readonly></td>            
                </tr>
                <tr>
                <th><label for="cost">Cost </label></th>
                <td><input type="number" id="cost" name="cost" value="<?php echo $result['cost'] ?>" style="border:none" readonly></td>
                </tr>
                <tr>
                <th><label for="qty">Quantity </label></th>
                <td><input type="number" min="1" id="qty" name="quantity" value="<?php echo $result['quantity'] ?>" placeholder="Enter Quantity" readonly></td>
                </tr>
                <tr>
                <th><label for="fullname">Full Name </label></th>
                <td><input type="text" id="fullname" value="<?php echo $result['fullname'] ?>" name="fullname" placeholder="Enter your Name" readonly></td>
                </tr>
                <tr>
                <th><label for="email">Email </label></th>
                <td><input type="text" id="email" name="email" value="<?php echo $result['email'] ?>" placeholder="Enter your Email Id" readonly></td>
                </tr>
                <tr>
                <th><label for="phone">Phone </label></th>
                <td><input type="number" min="0" id="qty" name="phone" value="<?php echo $result['phone']?>" placeholder="Enter your Phone No." readonly></td>
                </tr>
                <tr>
                <th><label for="address">Address </label></th>
                <td><input type="text" id="address" name="address" value="<?php echo $result['address']?>" placeholder="Enter your Address" readonly></td>
                </tr>
                <tr>
                <th><label for="pincode">Pin Code </label></th>
                <td><input type="number" id="pincode" name="pincode" value="<?php echo $result['pincode'] ?>" placeholder="Enter your PinCode" readonly></td>
                </tr>
                <tr>
                <th><label for="status">Status</label></th>
                <td><input type="text" id="status" name="Status" value="Delivered"  readonly></td>
                </tr>
                <tr>
                    <th>
                        <td><input type="submit" value="Update Details" name="update"></td>
                    </th>
                </tr>  
            </table>
        </form>
        </div>
        </section>
    </body>
</html>
<?php
if($_POST['update']){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $qty=$_POST['quantity'];
    $item=$_POST['item'];
    $cst=$_POST['cost'];
    $status=$_POST['Status'];

$query = "UPDATE restaurant03 set fullname='$fullname',email='$email',phone='$phone',address='$address',pincode='$pincode',quantity='$qty',item='$item',cost='$cst',Status='$status' WHERE id='$id'";
    
         
    $data=mysqli_query($conn,$query);
    
    if($data){
        //echo "Successfully Updated";
    }
    else{
        //echo "Ordered Failed";
    }
    if($data == true){
        header("location:../all_orders_data.php");
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