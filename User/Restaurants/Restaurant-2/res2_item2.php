<?php
include("../../../Connection/connection.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant 2</title>
        <link rel="stylesheet" href="../../../css/all_items_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    <h1>FOODIE</h1>
    <hr>
        <form action="#" method="POST">
            <section>
                <table class="center">
                    <tr>
                        <td class="userdetails">
                            <div class="readonly1">
                                <p>
                                    <label for="item"><b>Item :</b></label>
                                    <input type="text" value="ffries" id="item" name="item" style="border:none" readonly><br>
                                </p>
                                <p>
                                    <label for="cost"><b>Cost :</b></label>
                                    <input type="number" value="50" id="cost" name="cost" style="border:none" readonly><br>    
                                </p>
                            </div>         
                            <img src="dishes 2/ffries.jpg">
                            <p>
                                <label for="qty"><b>Quantity :</b></label><br>
                                <input type="number" min="1" id="qty" name="quantity" placeholder="Enter Quantity" required><br>
                            </p>
                            <p>
                                <label for="fullname"><b>Full Name :</b></label><br>
                                <input type="text" id="fullname" name="fullname" placeholder="Enter your Name" required><br>    
                            </p>
                            <p>
                                <label for="email"><b>Email :</b></label><br>
                                <input type="text" id="email" name="email" value="<?php echo $_SESSION['user_name'] ?>" readonly><br>
                            </p>
                            <p>
                                <label for="phone"><b>Phone :</b></label><br>
                                <input type="number" min="0" id="qty" name="phone" placeholder="Enter your Phone No." required><br>
                            </p>
                            <p>
                                <label for="address"><b>Address :</b></label><br>
                                <input type="text" id="address" name="address" placeholder="Enter your Address" required><br>
                            </p>
                            <p>
                                <label for="pincode"><b>Pin Code :</b></label><br>
                                <input type="number" id="pincode" name="pincode" placeholder="Enter your PinCode" required><br>
                            </p>
                            <div class="readonly2">
                                <p>
                                <label for="status"><b>Status :</b></label>
                                <input type="text" value="Not Delivered" id="status" name="Status" style="border:none" readonly><br>
                                </p>
                            </div>
                            <p><input type="submit" value="Order" name="submit" id="submit"></p>
                        </td>
                    </tr>
                </table>
            </section>
        </form>  
                          
    </body>
</html>
<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$item=$_POST['item'];
$cst=$_POST['cost'];
$qty=$_POST['quantity'];
$ds=$_POST['Status'];

if($fullname !="" && $email !="" && $phone !="" && $address !="" && $pincode !="" && $item !="" && $cst !="" && $qty != ""){

$query="INSERT INTO RESTAURANT2 (fullname,email, phone,address,pincode,item,cost,quantity,Status) VALUES ('$fullname','$email','$phone','$address','$pincode','$item','$cst','$qty','$ds')";
$data=mysqli_query($conn,$query);

if($data==true){
    ?><script>
    alert("Successfully Ordered");
</script><?php
}
else{
    ?><script>
    alert("Order Failed");
</script><?php
}
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