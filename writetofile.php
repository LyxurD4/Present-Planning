<?php

$date = date("m-d-Y h:i:s");
$userinput = "\n$date > " . $_POST['userinput'];
$file = fopen("userinput.txt", "a") or die ("Can't creat/open file.");
fwrite($file, $userinput) or die ("Can't write to file.");
fclose($file) or die ("Can't close file.");
header("Location: index.html");