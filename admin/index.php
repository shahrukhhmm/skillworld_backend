<?php
  include "config.php";
  session_start();

  if(isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/post.php");
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
 </head>
<body>
<div id="wrapper-admin">
            <div class="container ">
                <div class="row d-flex flex-column align-items-center justify-content-center">
                    <div class="col-md-offset-4 col-md-4 mt-5">
                        <div class="d-flex justify-content-center">
                        <img style="min-width: 200px;max-width:350px;" class="logo" src="../img/SkillWorld 2.png">
                        </div>
                       
                        <h3 class=" mt-5">Admin</h3>
                        <!-- \ Form Start --> 
                         <form class="shadow-lg p-3 mb-5 bg-white rounded" action="<?php  $_SERVER['PHP_SELF']?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" autocomplete="off" placeholder="" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                            <input type="submit" name="login" class="btn btn-primary" value="LOGIN" />
                      </div>
                            
                        </form>
                        <!-- /Form  End -->
                        <?php
                        if(isset($_POST['login'])){
                            include "config.php";
                            $username=mysqli_real_escape_string($conn,$_POST['username']);
                            $password=md5($_POST['password']);

                            $sql= "SELECT * FROM user where username = '{$username}'
                            --  AND password = '{password}'
                             ";
                            $result = mysqli_query($conn,$sql) or die("Query Failed");
                    //  echo "<pre>";
                    //  print_r($result);
                    //  echo "</pre>";
                    //  die();
                            if(mysqli_num_rows($result)>0){

                                while($row=mysqli_fetch_assoc($result)){
                                    if($row['password']=$password){
                                        session_start();
                                        $_SESSION["username"]=$row['username'];
                                        $_SESSION["user_id"]=$row['user_id'];
                                        $_SESSION["user_role"]=$row['role'];
                                        header("Location: {$hostname}/admin/post.php");
                                    }
                                    
                                }
                            }
                            else{
                                echo "<div class='alert alert_danger'>USername and password are not correct</div>";
                            }

                        }
                         
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php include "footer.php"; ?>