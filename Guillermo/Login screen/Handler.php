<?php
$date = date("m-d-Y h:i:s");

if (isset($_POST["submit"])) {
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Login Time: " . $date . " User: " . $_POST["naam"] . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
}

header("location:login.php");
