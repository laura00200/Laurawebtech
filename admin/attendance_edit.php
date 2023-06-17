<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">
    <div class="card shadow nb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit students attendance
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
                <label>Usertype:</label>
                <select name="update_usertype" class="form-control">
                    <option value="admin">Present</option>
                    <option value="user">Absent</option>
                </select>
            </div>

            <!--the 2 buttons for canceling anf updating-->
            <a href="attendance.php"class="btn btn-danger">CANCEL</a>
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