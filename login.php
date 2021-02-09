<?php
include_once('main.php');
if(isset($_SESSION['username']) && isset($_SESSION['csrf_token'])) {
    header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FESDIS-MOVIES</title>
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <br>
    <div class="theLogForm" style="margin: 60px auto;max-width: 300px;">
        <form  style="margin:20px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
        <span> <?php include_once('errors.php');?> </span>
            <div class="row">
                <div class="col-25">
                    <label>USERNAME</label>
                </div>
                <div class="col-75">
                    <input type="text" name="username" placeholder="username">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>PASSWORD</label>
                </div>
                <div class="col-75">
                    <input type="password" name="password" placeholder="******">
                </div>
            </div>
            <div class="subsub">
                <input id="submitBTN" style="margin-left:90px;margin-top:12px;" type="submit" value="LOGIN" name="login_sub">
            </div>
            <br>
            <br>
            <span>
                New Member ? 
                <a href="register.php">
                    <strong id="FINALSUB">REGISTER</strong>
                </a>
            </span>
        </form>
    </div>
</body>
    <footer>
        <marquee ><p>Copyright 2021 - OUSSAMA</p></marquee>
        <a href="https://www.facebook.com/unknownkid.18">
            <img style="width:60px;" src="img/face.png" alt="FaceBook Logo">
        </a>
        <a href="https://www.instagram.com/o.u.s.s._.a.m.a">
            <img style="width:40px;" src="img/insta.png" alt="FaceBook Logo">
        </a>
    </footer>
</html>
