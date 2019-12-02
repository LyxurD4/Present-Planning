<!doctype html>
<html>

<head>
<link rel="icon" type="image/png" href="images/checkicon.png" />
    <link rel="stylesheet" href="css/absentPresent.css">
    <title>Absent/Present</title>
</head>

<body>
    <div class="content">
        <div>
            <h1>Ben je present of absent?</h1>
        </div>
        <div class="buttons">
            <form action="handler.php" method="post">
                <input type="submit" value="Absent" class="absent" name="submit-absent">
                <input type="submit" value="Present" class="present" name="submit-present">
            </form>
        </div>
    </div>
</body>

</html>