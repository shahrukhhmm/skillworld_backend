<?php
  include "config.php";

  $id = $_GET['id'];



  $sql = "DELETE FROM messages WHERE id = {$id}";

  if(mysqli_query($conn, $sql)){
    header("location: {$hostname}/admin/post.php");
  }else{
    echo "Query Failed";
  }
?>
