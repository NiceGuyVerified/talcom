<html></html>


<?php
include 'db.php';
    if(isset($_POST['submit'])) {
        if($_POST['pass1'] === $_POST['pass2']) {
            $sql = "INSERT INTO users (username, email, password) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['pass1'] . "')";

            if ($mysqli->query($sql) === TRUE) {
                echo "Successfully Signed Up!";
                } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
            echo "Passwords do not match";
        }
    } else {
        echo "this ur problem";
    }
?>
