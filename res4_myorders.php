<?php
include("connection.php");
session_start();
//echo "Welcome ".$_SESSION['user_name'];
?>
<?php
    $userprofile = $_SESSION['user_name'];
    $query = "SELECT * FROM  RESTAURANT04 WHERE Email='$userprofile'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    //echo $total;
    if($total != 0){
?>
<html>
    <head>
        <title>My Orders of Restaurant 02</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/res_orders_style.css">
    </head>
<body>
    <div class="form-box">
       
    <h3>Restaurant 4</h3>
        <table align="center" border="1px">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Item</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
        <?php
        while($result=mysqli_fetch_assoc($data)){
            $integer_qty=intval($result['quantity']);
            $integer_cst=intval($result['cost']);
        echo "<tr>
              <td>".$result['fullname']."</td>
              <td>".$result['email']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['address']."</td>
              <td>".$result['pincode']."</td>
              <td>".$result['item']."</td>
              <td>".$integer_cst."</td>
              <td>".$integer_qty."</td>
              <td>"."Rs.".$integer_qty * $integer_cst."/-"."</td>
              <td>".$result['Status']."</td>
              <td><a href='res4_myorders_edit.php?em=$result[id]'><button>Update</button></a></td>
              </tr> 
            ";
        }
        }
        else{
            ?>
            <p style="text-align:center">🙁 You haven't ordered anything yet.</p>
            <p style="text-align:center">🤤 Delicious Food items are waiting for you. Start ordering 🔥</p>
            <?php
        }
        ?>
    </div>
</body>
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