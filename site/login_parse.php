<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $escapedName = mysqli_real_escape_string($link, $_POST['username']);
    $escapedPW = mysqli_real_escape_string($link, $_POST['pass']);
    $saltQuery = "SELECT salt FROM users WHERE username = '$escapedName'";
    $result = mysqli_query($link, $saltQuery);
    $row = mysqli_fetch_assoc($result);
    $salt = $row['salt'];
    $saltedPW =  $escapedPW . $salt;
    $hashedPW = hash('sha256', $saltedPW);
    $sql = "SELECT * FROM users WHERE username = '$escapedName' and password = '$hashedPW'";

    if ($link->query($sql) == TRUE) {
        echo "Successfully Logged In!";
    } else {
        echo "Could Not Log ", $escapedName ," In.<br />";
        echo "Password Is: ", $hashedPW ," FYI<br />";
        echo "Salt Is: ", $salt ," FYI<br />";
        echo "SQL Is: ", $sql ," FYI<br />";
    }
}
?>