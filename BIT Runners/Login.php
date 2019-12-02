<!DOCTYPE html>

<html>

<head>
    <title>BIT Runners Login</title>
    <link rel="icon" type="image/png" href="images/login.png" />
    <link rel="stylesheet" type="text/css" href="css/loginscreen.css">
</head>

<body>
    <div class="all-content">
        <div class="login-container">
            <div class="login-box">
                <form action="handler.php" method="post" class="login-form">

                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                    </div>
                    <div class="wrap-input">
                        <input class="input" type="text" name="naam" autocomplete="off" required>
                        <span class="focus-input" data-placeholder="Naam"></span>
                    </div>
                    <div class="subm-button">
                        <button type="submit" name="submit-name" class="button">Verstuur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>