<?php

session_start();

$databaseHost = "localhost:3307";
$databaseUsername = "laura";
$databasePassword = "laura";
$databaseName = "form";

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if ($conn->connect_error) {
    /* Use your preferred error logging method here */
    error_log('Connection error: ' . $conn->connect_error);
}
else {
    echo("Connected");
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if ($password === $confirm_password) {
        // Prepare an SQL statement
        $query = "INSERT INTO register1 (username, email, pass) VALUES (?,?,?)";
        $query_run = mysqli_query($connection,$query);
        $stmt = mysqli_prepare($connection,$query);
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();   
        // Bind variables to the prepared statement as parameters
       

        // Execute the prepared statement
}
}
if(isset($_POST['updatebtn']))
{   $id= $_POST['edit_id'];
    $username= $_POST['edit_username'];
    $email= $_POST['edit_email'];
    $password= $_POST['edit_password'];

    $query = "UPDATE register1 SET username='$username', email='$email',pass='$password' WHERE id= '$id'";
     $query_run = mysqli_query($connection,$query);

    
}

if(isset($_POST['delete_btn']))
{$id= $_POST['delete_id'];
 $query = "DELETE FROM register1 WHERE id='$id'";
 $query_run = mysqli_query($connection,$query);
}

?>