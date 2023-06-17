<?php

session_start();

$databaseHost = "localhost:3307";
$databaseUsername = "laura";
$databasePassword = "laura";
$databaseName = "form";

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

    if ($password === $confirm_password) {
        // Prepare an SQL statement
        $query = "INSERT INTO register1 (username, email, pass, usertype) VALUES (?, ?, ?,? )";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password,$usertype);

        if (mysqli_stmt_execute($stmt)) {
            echo "Registration successful!";
        } else {
            echo "Error in registration: " . mysqli_error($connection);
        }

    
    } else {
        echo "Passwords do not match!";
    }
}





if(isset($_POST['updatebtn']))
{   $id= $_POST['edit_id'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];
    $query = "UPDATE register1 SET username='$username', email='$email',pass='$password',usertype='$usertypeupdate' WHERE id= '$id'";
     $query_run = mysqli_query($connection,$query);

    
}

if(isset($_POST['delete_btn']))
{$id= $_POST['delete_id'];
 $query = "DELETE FROM register1 WHERE id='$id'";
 $query_run = mysqli_query($connection,$query);
}


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register1 WHERE email='$email_login' AND pass='$password_login'";
$query_run = mysqli_query($connection, $query);
$usertypes = $query_run;
$row = $usertypes->fetch_assoc();
if($row['usertype'] == "admin") {
    $_SESSION['username'] = $email_login;
    header('Location: index.php');
   
} 
else if($row['usertype'] == "user"){
    $_SESSION['username'] = $email_login;
    header('Location: ../home1.html');
}
else {
    $_SESSION['status'] = 'Email id/Password is invalid';
    header('Location: login.php');
    
}
}
    


if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}



if (isset($_POST['attendancebtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $query = "INSERT INTO attendance (username, email) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt,"ss", $username, $email);

    if (mysqli_stmt_execute($stmt)) {
        echo "Attendancesuccessful!";
       
    } else {
        echo "Error in attendance: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>