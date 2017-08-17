<?php
    $mysqli = new mysqli("158.69.215.252", "talcom", "TalcomDev", "talcom");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>
