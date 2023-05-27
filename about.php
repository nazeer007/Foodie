<?php
include("connection.php");
session_start();

//echo "Welcome ".$_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Page</title>
        <link rel="stylesheet" href="css/about_design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <h1>FOODIE</h1>
        <hr>
        <h2>Welcome to FOODIE!</h2>
        <p>
            FOODIE is a food ordering system. Where you can order food from different restaurants available.
            We are passionate about food and technology. We 
            believe that by bringing these two together, we can make ordering food easier, 
            faster and more convenient for everyone.
            It is designed to streamline the process of ordering food online,
            making it easier for restaurants and their customers to connect.
        </p>
        <h2>Our Mission</h2>
        <p>
            Our mission is to help restaurants grow their business by providing a simple and 
            effective online ordering solution. We want to make it easy for people to order food
            from their favorite restaurants among the restaurants available. It helps the restaurants 
            to increase their revenue and reach a wider audience.
        </p>
        <h2>Our Values</h2>
        <p>
            At our Foodie, we value simplicity, convenience and reliability. We believe that by focusing on 
            these values, we can create a seamless ordering experience that satisfies both restaurants and their customers.
        </p>
        <h2>Our Services</h2>
        <p>
            Our Foodie offers a range of services that help restaurants manage their online orders and grow their business.
        <a>Our services include:</a>
        <p>
            • Online ordering system setup<br><br>
            • Order management
        </p>
        <h2>Contact Us</h2>
        <p>
            If you have any questions or would like to learn more about our FOODIE, please contact us at <br> 
        </p>

        <div class="myicons1">
            <a href="mailto:nazeersyed117@gmail.com"><img src="icons/gmail.png" style="margin-right:10px;"></a>
            <a href="https://wa.me/+918919021989"><img src="icons/icons8-whatsapp-1000.png" style="margin-right:10px;"></a>
            <a href="https://www.instagram.com/thenameisnazeer/"><img src="icons/icons8-instagram-700.png" style="margin-right:10px;"></a>
            <a href="https://www.facebook.com/Nazeer Syed/"><img src="icons/icons8-facebook-1000.png" style="margin-right:10px;"></a>
            <a href="https://twitter.com/thenameisnazeer/"><img src="icons/icons8-twitter-1000.png"></a>
        </div>
        <h2>FAQs</h2>
        <P>
           <b>Q: How does the system work?</b><br>
            <b>A: </b>Our system allows customers to place orders online through a simple and easy-to-use interface.
            Once an order is received, the restaurant can manage and fullfill yhe order through our backend system.
        </P>
        <p>
            <b>Q: How to Order Food?</b><br>
            <b>A: </b><br>
            <b>Step 01: </b> Click on Restaurants in top navigation bar.<br>
            <b>Step 02:</b> Choose the restaurant among the available restaurants.<br>
            <b>Step 03:</b> Choose the food item that you would like to order.<br>
            <b>Step 04:</b> Fill all the required details and click on <b>"Order"</b> button.<br>
            <b>Step 05:</b> You will get a pop-up message whether your order is successful or not.<br>
            <b>Step 06:</b> If your order is successful, then you can see the details of your orders at <b>"Orders"</b> in top navigation bar.<br>
        </p>
         <p>
            <b>NOTE : </b><br> • At present, we are Providing cash on delivery only.<br>
            • Please choose your profile picture and password carefully. Because there is no option to change the profile picture and Password 
            once you choose at the time of register.
        </p>
        <h2>Owner</h2>
        <p><b>CEO : </b>Syed Nazeer</p>



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
