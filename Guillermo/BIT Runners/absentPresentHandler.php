<?php
if(isset($_POST["absent"])) {
    setcookie("absent", $_POST["absent"]);
    header("Refresh:0");
}
if(isset($_POST["present"])) {
    setcookie("present", $_POST["present"]);
    header("Refresh:0");
}
$absent = $_COOKIE["absent"];
$present = $_COOKIE["present"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?
        var_dump();
        var_dump($_COOKIE["present"]);
    ?>
</body>
</html>
