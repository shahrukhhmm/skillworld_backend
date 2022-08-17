<?php
include "config.php";

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE id= {$userid}";

if(mysqli_query($conn,$sql)){
    header("Location: {$hostname}/admin/user.php");
}
else{
    echo "<p style='color:red;margin: 10px 0;'>CAn't Delete the user Record</p>";
}

mysqli_close($conn);




?>
