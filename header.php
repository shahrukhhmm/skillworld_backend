<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="style/bootstrap.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/SkillWorld 2.png" type="image/x-icon">


    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style/style.css">


    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39de285129.js" crossorigin="anonymous"></script>

    <!-- animationcss -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Skill world</title>
</head>
<body>
    <!-- navabar -->
    <div class="bar">
     
        <nav class="nav container-xxl px-4 align-items-center">
    
            <div class="logo me-4">
                <img src="img/SkillWorld 2.png" alt="">
                <!-- SKILLWORLD -->
            </div>

            <i class="fas fa-bars" ></i>
      
       
            <i class="fas fa-times"></i>

            <ul class="nav text-uppercase">
             <li class="nav-item"><a class="nav-link" href="#home1">Home </a></li>
             <li class="nav-item"><a class="nav-link" href="#about1">About </a></li>
             <li class="nav-item"><a class="nav-link" href="#services1">Services</a></li>
             <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li> -->
             <!-- <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li> -->
             <li class="nav-item contact1"><a class="nav-link" href="#contact1">Contact</a></li>
         </ul>
      
     
      </nav>
 
    </div>

<aside class="side-nav">
    <br>
    <br>
    <a href="#home1" onclick="closeside()" class="d-block  mx-4 ">Home</a>
    <br>
    <a href="#about1" onclick="closeside()" class="d-block  mx-4 ">about</a>
    <br>
    <a href="#services1" onclick="closeside()" class="d-block mx-4 ">services</a>
    <!-- <br> -->
    <!-- <a href="#portfolio" onclick="closeside()" class="d-block mx-4 ">portfolio</a> -->
    <!-- <br> -->
    <!-- <a href="#testimonials" onclick="closeside()" class="d-block  mx-4">testimonials</a>
    <br> -->
    <!-- <a href="#pricing" onclick="closeside()" class="d-block  mx-4 ">pricing</a> -->
    <br>
    <a href="#contact1" onclick="closeside()" class="d-block mx-4">contacts</a>
   
</aside>
<div id="side-nav-cover"></div>
<!-- navbar end -->