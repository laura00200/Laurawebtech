<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // Include the database connection file
    include_once("config.php");
    
   
        $stmt = $conn->prepare("insert into register(name,email,phone) values(?,?,?)");
        $stmt->bind_param("ssi",$name,$email,$phone);
        $stmt->execute();
        echo "Registration was successfully made";
        $stmt->close();
        $conn->close();

    
?>

