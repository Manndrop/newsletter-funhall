<?php

$link = mysqli_connect(localhost, "root", "", "newsletter");
session_start();

if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$mail = mysqli_real_escape_string($link, $_REQUEST['mail']);


$sql = "INSERT INTO `newsletter` (`email`) VALUES ('$mail')";


if(mysqli_query($link, $sql)) {
    echo "Records added succesfully.";
    //header("Location: /newsletter/newsletter.php");
} else {
    echo "ERROR: Could not be able to execute $sql." . mysqli_error($link);
}

mysqli_close($link);