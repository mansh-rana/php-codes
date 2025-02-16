<?php
$link = mysqli_connect("localhost", "hi", "hi", "test");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

var_dump($link);
echo "<br> This code is executed by Mansh rana!";

mysqli_close($link);
?>
