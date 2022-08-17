<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../img/SkillWorld 2.png" type="image/x-icon">


    <!-- custom stylesheet -->
    <link rel="stylesheet" href="../style/style.css">


    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39de285129.js" crossorigin="anonymous"></script>

    <!-- animationcss -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Skill world</title>
    <style>
        table, td, th {
    border: 1px solid;
    padding: 5px;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th{
      background-color: lightblue;
  }
    </style>
</head>
<body>
    <!-- navabar -->
    <div class="bar">
     
        <nav class="nav container-xxl px-4 align-items-center">
    
            <div class="logo me-4">
                <img src="../img/SkillWorld 2.png" alt="">
                <!-- SKILLWORLD -->
            </div>

            <i class="fas fa-bars" ></i>
      
       
            <i class="fas fa-times"></i>

            <ul class="nav text-uppercase">
             <li class="nav-item"><a class="nav-link" href="user.php">admins </a></li>
             <li class="nav-item"><a class="nav-link" href="post.php">Messages </a></li>
             <li class="nav-item"><a class="nav-link" href="logout.php">Hello <?php echo $_SESSION["username"]; ?>, LOGOUT </a></li>
             <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
         </ul>
      
     
      </nav>
 
    </div>

<aside class="side-nav">
    <br>
    <br>
    <a class="nav-link" href="user.php">admins </a>
    <br>
   <a class="nav-link" href="post.php">messages </a>
    <br>
    <a class="nav-link" href="logout.php">Hello <?php echo $_SESSION["username"]; ?>, LOGOUT </a>
    <br>
    <!-- <a href="#services" onclick="closeside()" class="d-block mx-4 ">services</a> -->
    <!-- <br> -->
    <!-- <a href="#portfolio" onclick="closeside()" class="d-block mx-4 ">portfolio</a> -->
    <!-- <br> -->
    <!-- <a href="#testimonials" onclick="closeside()" class="d-block  mx-4">testimonials</a>
    <br> -->
    <!-- <a href="#pricing" onclick="closeside()" class="d-block  mx-4 ">pricing</a> -->
    <br>
    <!-- <a href="#contact" onclick="closeside()" class="d-block mx-4">contacts</a> -->
   
</aside>
<div id="side-nav-cover"></div>
<!-- navbar end -->