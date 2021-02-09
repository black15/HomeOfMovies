<?php
if(isset($_SESSION['username']) && isset($_SESSION['csrf_token'])) {
    header('location:index.php');
    }
include_once('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER FESDIS-MOVIES</title>
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <br>
    <div class="theRegForm" style="margin: 60px auto;max-width: 300px;">
        <?php include_once('errors.php');?>
        <form  style="margin:20px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
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
            <div class="row">
                <div class="col-25">
                    <label>EMAIL</label>
                </div>
                <div class="col-75">
                    <input type="text" name="email" placeholder="example@any.com">
                </div>
            </div>
            <div class="row">
                <input id="submitBTN" style="margin: 10px 90px;" type="submit" value="REGISTER" name="submit">
            </div>
            <br>
            <span>Already Have an Account ? <a href="login.php"><strong id="FINALSUB" >LOGIN</strong></a></span>
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
