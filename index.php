<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Absent/Present</title>
</head>
<body>
    <div class ="content">
        <div>
            <h1>Ben je present of absent?</h1>
        </div>
        <div class="buttons">
            <form action="absent.php" method="post">
                <input type="submit" value="Absent" class="absent">
            </form>
            <form action="present.php" method="post">
                <input type="submit" value="Present" class="present">
            </form>
        </div>
    </div>
</body>
</html>
