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

if (isset($_POST["absent"])) {
    $choice = "absent";
}
if (isset($_POST["present"])) {
    $choice = "present";
}

if (isset($choice)) {
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Choice Time: " . $date . " Ik ben vandaag $choice"  . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
//    header("location:absentPresent.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/loginHandler.css">
    <title>HOME</title>
</head>
<body>
    <div class="navbar">
        <img src="images/BITRunnerslogozondertekst.png" alt="BITRunners">
        <a class="active" href="#home">Home</a>
        <a href="#nieuws">Nieuws</a>
        <a href="#planning">Planning</a>
        <a href="#overzicht">Absentie</a>
    </div>
    <div class="topinfo">
        <h1>
            Goedemorgen, <? echo $_COOKIE["naam"]; ?>!
        </h1>
        <h3>
            Je bent vandaag <? echo $choice; ?>!
        </h3>
    </div>

    <div class="content">
        <div class="planningGisteren">
            <h4 class="planningGisterenFont">
                Planning gisteren:
            </h4>
            Iets
        </div>
        <div class="planningVandaag">
            <h4 class="planningVandaagFont">
                Planning vandaag:
            </h4>
            Iets
        </div>
        <div class="presentie">
            <h3 class="presentieFont">
                Presentie:
            </h3>
            Iets
        </div>
    </div>
</body>
</html>



