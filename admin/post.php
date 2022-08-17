<?php include "header.php"; ?>
  <div id="admin-content" >
      <div class="container">
          <div class="row" style="overflow-x: scroll;">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              
              <div class="col-md-12">
                <?php
                  include "config.php"; 
                    $sql = "SELECT * from messages";

                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                  <table class="content-table">
                      <thead>
                          <th>MSG.NO</th>
                          <th>FULL NAME</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Message</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) {?>
                           <tr>
                               <td class='id'><?php echo  $row['id']; ?></td>
                               <td><?php echo $row['fullname']; ?></td>
                               <td><?php echo $row['email']; ?></td>
                               <td><?php echo $row['phone']; ?></td>
                               <td><?php echo $row['messages']; ?></td>
                               
                               <td class='delete'><a href='delete-post.php?id=<?php echo $row['id']; ?>'><i class='fa fa-trash-o'></i></a></td>
                         </tr> 
                          <?php
                          
                         } ?>
                      </tbody>
                  </table>
                  <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                }
               
                  ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
