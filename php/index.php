<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con); 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <h>Welcome to Recycling program Website</h>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu bar</title>
    <link rel="stylesheet" href="c.css">
</head>
<body>
    <nav>
        <ul class="sidebar">
            <li onclick=hidesidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="home.html">home</a></li>
            <li><a href="about us.html">about us</a></li>
            <li><a href="our product.html">our product</a></li>
            <li><a href="contact us.html">contact us</a></li>
        </ul>
        <ul>
            <li> <strong>RECYCLING PROGRAM</strong></li>
            <marque><b><h1 style="color: yellow;">Welcome to Recycling program Website
            </h1></b></marque>  
            <li onclick=showsidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
    <h10>HOME PAGE</h10>
    <div class="container2">
        <div class="box1">
            <h2>Recycling Guidelines</h2>
            <p1>Here are some guidelines for recycling:</p1>
            <h1>Welcome to Recycling program Website</h1>
        <p1> <b> This is Recycling program</b></p1>
            <ul>
              <ul>Separate recyclable materials.</ul>
              <ul>Rinse containers before recycling.</ul>
              <ul>Check local recycling rules.</ul>
            </ul>
          </div>
    <div class="image-container">
        <img src="what.jpg" alt="Image" class="resized-image">
    </div>
</div>
      <div class="container">
        <div class="box">
            <h2>Get to know your local recyler</h2>
            <ul>
              <li>Check printed materials from your local government or recycling provider .</li>
              <li>Browse the website of your local government or recycling provider.</li>
              <li>Call your local government or recycling provider when you have questions.</li>
            </ul>
          </div>
      
      
        <div class="image-container1">
            <img src="rrb.jpg" alt="Image" class="resized-image1">
        </div>
      </div>

      <div class="container22">
        <div class="image-container22">
            <img src="6.png" alt="Image" class="resized-image22">
        </div>
      </div>
        <div class="container1">
        <div class="text-container">
            <p><br>A recycling program is a system that <br>is set up in your home, school or office
                <br>to effectively manage waste in the 
                <br>correctlyour website helps to show
                <br> the way we can reuse those used<br> products inorder to reduce waste
                <br>Reduces the amount of waste sent to <br>landfills and incinerators. 
                <br>Conserves natural resources such as <br>timber, water and minerals.
                <br> Prevents pollution and reduces <br>greenhouse gases by reducing the need <br>to mine and process new raw materials.
            <br>Recycling is the process of collecting and processing materials <br>that would otherwise be thrown away as trash and turning them into new products. <br>Recycling can benefit your community, the economy, and the environment. 
            <br>Products should only be recycled if they cannot be reduced or reused.
            <br/></p>
            </div>
            <div class="image-container2">
                <img src="students.jpg" alt="Image" class="resized-image2">
            </div>
      </div>

      <div class="container0">
        <ul h>Stay Updated with How2Recycle</h>
            <a href="https://www.facebook.com/How2Recycle"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/how2recycle_/"><i class="fa-brands fa-instagram"></i></a>
        <li><a href="connect.html">connectwithus</a></li>
        <li><a href="recycle.html">about how2recycle</a></li>
        <li><a href="compost.html">how2compost</a></li>
        <li><a href="privacy.html">privacy_policy</a></li>
        <li><a href="label.html">about the label</a></li>
    </ul>
      </div>
      

    <script>
        function showsidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hidesidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
    <script src="https://kit.fontawesome.com/c618e882ef.js" crossorigin="anonymous"></script>
</body>
</html>