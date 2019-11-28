<?php
$date = date("m-d-Y h:i:s");
$naam = $_POST["naam"]; 

if (isset($_POST["submit-name"])) {
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Login Time: " . $date . " User: " . $naam . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
    header("location:absentPresent.php");
}

if (isset($_POST["absent"])){
    $choice = "absent";
}
if (isset($_POST["present"])){
    $choice = "present";
}

if (isset($choice)) {
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Choice Time: " . $date . " Ik ben vandaag $choice"  . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
    header("location:absentPresent.php");
}



