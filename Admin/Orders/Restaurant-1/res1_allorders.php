<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Display</title>
        <link rel="stylesheet" href="../../../css/res_all_orders_styling.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <h3>Restaurant 01</h3>


<?php
include("../../../Connection/connection.php");
error_reporting();
$query= "SELECT * FROM RESTAURANT01";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
//echo $total;
if($total !=0){
    ?>
    <table align="center" border="1px">
        <tr>
            <th>Id</th>
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
    while($result= mysqli_fetch_assoc($data)){
        $integer_qty=intval($result['quantity']);
        $integer_cst=intval($result['cost']);

        echo "<tr>
              <td>".$result['id']."</td>
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
              <td><a href='res1_all_orders_update.php?em=$result[id]'><button>Update</button></a></td>
              </tr> 
            ";
    }
}
else{
    echo "No records found";
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
</table>
</body>
</html>