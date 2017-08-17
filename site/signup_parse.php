<html></html>


<?php
include 'db.php';
    if(isset($_POST['submit'])) {
        if($_POST['pass1'] === $_POST['pass2']) {
            $escapedName = mysqli_real_escape_string($link, $_POST['username']);
            $escapedPW = mysqli_real_escape_string($link, $_POST['pass1']);
            $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
            $saltedPW =  $escapedPW . $salt;
            $hashedPW = hash('sha256', $saltedPW);  
            
            $sql = "INSERT INTO users (username, email, password, salt) VALUES ('$escapedName', '" . $_POST['email'] . "', '$hashedPW', '$salt')";

            if ($link->query($sql) === TRUE) {
                echo "Successfully Signed Up!";
                } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }
        } else {
            echo "Passwords do not match";
        }
    } else {
        echo "this ur problem";
    }
?>