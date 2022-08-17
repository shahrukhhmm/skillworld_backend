<?php include "header.php";

if(isset($_POST['submit'])){
  include "config.php";

  $userid = mysqli_real_escape_string($conn,$_POST['user_id']);
  $fname = mysqli_real_escape_string($conn,$_POST['f_name']);
  $lname = mysqli_real_escape_string($conn,$_POST['l_name']);
  $user = mysqli_real_escape_string($conn,$_POST['username']);

  
  $sql= "UPDATE user SET fullname = '{$fname}', lastname='{$lname}',username= '{$user}' WHERE id={$userid}";

    if(mysqli_query($conn,$sql)){
      header("Location: {$hostname}/admin/user.php");
    }
}

?>
  <div id="admin-content">
      <div class="container ">
          <div class="row d-flex justify-content-center">
              <div class="col-md-12 mt-5">
                  <h1 class=" text-center">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4 mt-5">
                <?php
                include "config.php";
                $user_id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE id = {$user_id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                ?>
                  <!-- Form Start -->
                  <form  class="shadow-lg p-3 mb-5 bg-white rounded" action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group mt-3">
                          <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['id'];  ?>">
                      </div>
                          <div class="form-group mt-3">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['fullname'];  ?>" required>
                      </div>
                      <div class="form-group mt-3">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $row['lastname'];  ?>" required>
                      </div>
                      <div class="form-group mt-3">
                          <label>User Name</label>
                          <input type="text" name="username" autocomplete="off"  class="form-control" value="<?php echo $row['username']; ?>" placeholder="" required>
                      </div>
                      <div class="d-flex justify-content-center mt-3">
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                      </div>
                  </form>
                  <!-- /Form -->
                  <?php
                }
              }
                   ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
