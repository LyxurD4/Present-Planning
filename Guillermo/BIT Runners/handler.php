<?php
session_start();
$date = date("l m-d-Y h:i:s");
$naam = $_POST["naam"]; 

if (isset($_POST["submit-name"])) {
    $_SESSION["name"] = $naam;
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Login Time: " . $date . " User: " . $naam . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
    header("location:absentPresent.php");
}

if (isset($_POST["submit-absent"])){
    $_SESSION["absent"] = $_POST["submit-absent"];
    $choice = "absent";
    header("location:absentPresent.php");
} elseif (isset($_POST["submit-present"])){
    $choice = "present";
    $_SESSION["present"] = $_POST["submit-present"];
    header("location:absentPresent.php");
}

if (isset($choice)) {
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Choice Time: " . $date . " " . $_SESSION["name"] . " is vandaag $choice"  . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
    header("location:planning.php");
}



