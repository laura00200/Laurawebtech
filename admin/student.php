<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="attendancebtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Admin Profile 
</button>

<?php
    $connection = mysqli_connect("localhost:3307","laura","laura","form");
    $query ="SELECT * FROM attendance";
    $query_run = mysqli_query($connection,$query);
    ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Username</th>
                            <th>Email</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                <?php
                  if(mysqli_num_rows($query_run)>0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>

                          
                  
                        <tr>
                           
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            
                           
                        </tr>
                        <?php
                        }

                    }
                    else {
                        echo"No record found";
                    }
                    ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_SESSION['success'])) {
    echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}

if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-danger">'.$_SESSION['status'].'</div>';
    unset($_SESSION['status']);
}
?>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
