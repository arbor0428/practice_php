<?php include "inc/db_connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Life_Login</title>
    <?php include_once "default.php"; ?>
</head>
<body>
    <?php include_once "inc/header.php"; ?>
    <?php if(isset($_SESSION['userid'])) {?>
        <div id="welcome_container">
            <div class="welcomeBox">
                <h1><a href="#"><img src="img/main/logo.svg"></a></h1>
                <h3>Hello!</h3>
                <div class="login_box">
                    <p>Welcome,<span><?php echo $_SESSION['userid'] ?>!</span></p>
                    <a class="logout" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    <?php } else {?>
    <div id="login_container">
        <div class="txtBox">
            <h3>Welcome to <span>Veggie Life.</span></h3>
            <p class="detail">Lorem Ipsum is simply dummy text of the printing and typesetting 
                industry. Lorem Ipsum has been the industry's standard dummy text ever 
                since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type</p>
        </div>
        <div class="loginBox">
            <form method="post" action="login.php">
                <h1><a href="#"><img src="img/main/logo.svg"></a></h1>
                <h2>Veggie Life</h2>
                <p class="detail">Sign into your account</p>
                <div class="input_box first">
                    <input id="id" name="id" type="text" required placeholder="Enter your ID. (hannah1155)">
                </div>
                <div class="input_box second">
                    <input id="password" name="password" type="password" required placeholder="Enter your password (123456)">
                </div>
                <div class="clear_fix">
                    <div class="checkbox">
                        <input id="idsave" name="idsave" type="checkbox"><label for="idsave">Remember me</label>
                    </div>
                    <div class="find">
                        <a href="#">Forgot Password/ID</a>
                    </div>
                </div>
                <input id="login_btn" type="submit" value="Login">
                <div class="or-line">
                    <span class="line"></span>
                    <span class="or">OR Login With</span>
                    <span class="line"></span>
                </div>
                <ul class="icons clear_fix">
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">KAKAO TALK</a></li>
                    <li><a href="#">GOOGLE</a></li>
                </ul>
                <div class="registerWrap clear_fix">
                    <p class="que">Don’t have an account?</p>
                    <a class="register" href="register.php">Register here</a>
                </div>
            </form>
        </div>
    </div>
    <?php } ?>
    <?php include_once "inc/footer.php"; ?>
</body>
</html>