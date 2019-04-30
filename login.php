<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/style.css" rel="stylesheet" type="text/css" />
    <!-- Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700" rel="stylesheet">
    <title>Survey Santri QODR Andalus</title>
</head>

<body>
    <div class="main">
        <div class="user">
            <img src="images/user.png" alt="">
        </div>
        <!-- Start Main -->
        <div class="login">
            <div class="inset">
                <form action="cek_log.php" method="POST">
                    <div>
                        <span><label>Email</label></span>
                        <span><input type="text" class="textbox" name="email" autofocus="autofocus"></span>
                    </div>
                    <div>
                        <span><label>Password</label></span>
                        <span><input type="password" name="password" class="password"></span>
                    </div>
                    <hr>
                    <div class="sign">
                        <div class="submit">
                            <input type="submit" value="LOGIN">
                        </div>
                        <span class="forget-pass">
                            <a href="#">Forgot Password?</a>
                        </span>
                        <div class="clear"> </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Main -->
    </div>
</body>

</html>