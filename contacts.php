<?php
     include_once("config.php");
    if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'on'){
        $subscribe = true;
    }else{
        $subscribe = false;
    }
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['department'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message1 = $_POST['message'];
        $department = $_POST['department'];
        
        /* // Send an email
        $to = "admin@yourwebsite.com"; // change this to your email
        $subject = "New contact form submission";
        $message = "Name: $name \nEmail: $email \nPhone: $phone \nDepartment: $department \nMessage: $message1";
        $headers = "From: $email" . "\r\n" .
        'Reply-To: $email' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers)){
            $success = true;
        }else{
            $success = false;
        }
    }else{
        $success = false;
    } */
        $stmt = $conn->prepare("insert into contacts(name,email,phone,message,department) values(?,?,?,?,?)");
        $stmt->bind_param('sssss',$name,$email,$phone,$message1,$department);
        $stmt->execute();
        echo " Your contacting was successfully made";
        $stmt->close();
        $conn->close();
?>

