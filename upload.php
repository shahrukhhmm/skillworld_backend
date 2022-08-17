<?php 
session_start();
include "config.php";
  
//   session_start();
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['contact']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  
//   $author = $_SESSION['user_id'];

  $sql = "INSERT INTO messages(fullname, email,phone,messages)
          VALUES('{$fullname}','{$email}',{$phone},'{$message}')";
  

  if(mysqli_multi_query($conn, $sql)){
    $_SESSION['status']= 'Your message is recieved .  Now we can contact you on your given mail.';
    // header("location: {$hostname}/message-send.php");
    header("location: {$hostname}/");
    
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
?>