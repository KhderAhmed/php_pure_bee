<?php
    include 'config.php';
if(isset($_POST['send'])){
    $msg = "";
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pwd1 = trim($_POST['pwd1']);
    $pwd2 = trim($_POST['pwd2']);
    if($pwd1 == $pwd2){
        $sql = "SELECT * from users where email LIKE ?";
        $stmt = $conn ->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount()>0){
            $msg .= "Email already exists -_- ";
        }

        else{
            $sql = "INSERT INTO users (`name`, `username`, `email`, `pass`) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name,$username,$email,$pwd1]);
            $msg .="successfully registered";
        }
    }
    else{
        $msg .="Passwords do not match";
    }
    header("Location: registration.php?msg=".$msg);
}

