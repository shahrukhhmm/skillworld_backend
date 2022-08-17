<?php include "header.php";

if(isset($_POST['save'])){
  include "config.php";

  $fname =mysqli_real_escape_string($conn,$_POST['fname']);
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $user = mysqli_real_escape_string($conn,$_POST['user']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));

  $sql = "SELECT username FROM user WHERE username = '{$user}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO user (fullname,lastname, username, password)
              VALUES ('{$fname}','{$lname}','{$user}','{$password}')";
    if(mysqli_query($conn,$sql1)){
      header("Location: {$hostname}/admin/user.php");
    }else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
  }
}
?>
  
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-md-12 mt-5">
                  <h1 class="text-center">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6 mt-5">
                  <!-- Form Start -->
                  <form  class="shadow-lg p-3 mb-5 bg-white rounded" action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                      <div class="form-group mt-3">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name"  required>
                      </div>
                          <div class="form-group mt-3">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group mt-3">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group mt-3">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="d-flex justify-content-center mt-3">
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                      </div>
                      
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
  
<?php include "footer.php"; ?>
