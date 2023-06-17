<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">
    <div class="card shadow nb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit adimin profile
            </h6>
        </div>
        <div class="card-body">
            <?php
            //retrieve of data
            $connection = mysqli_connect("localhost:3307", "laura","laura","form");
            if(isset($_POST['edit_btn']))
            {
            $id = $_POST['edit_id'];

            $query = "SELECT * FROM attendance WHERE id='$id'";
            $query_run = mysqli_query($connection,$query);
            foreach($query_run as $row){
            ?>
             <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
             <div class="form-group">
                <label>Username:</label>
                <input type="text" name="edit_username" value="<?php echo $row['username']?>" class="form-control" placeholder="Enter username:">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter email:">
            </div>

            <div class="form-group">
                <label>Presence:</label>
                <select name="presence" class="form-control">
                    <option value="present">present</option>
                    <option value="absent">absent</option>
                </select>
            </div>

            <!--the 2 buttons for canceling anf updating-->
            <a href="student.php"class="btn btn-danger">CANCEL</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>

            </form>
            <?php
            }
            }
            ?>
            





        <?php
        include('includes/scripts.php');
        include('includes/footer.php');
        ?>