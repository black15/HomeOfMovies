<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['csrf_token'] )) {
    $newUser=strtoupper($_SESSION['username']);
}
else{
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT ME</title>
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<script src="js/script.js"></script>
    <div class="topnav" id="myTopnav">
    <a id="shadow" href="index.php" class="active"><img style="width:15px;" src="img/home.png"></a>
        <a id="shadow" href="films.php">أفلام</a>
        <a id="shadow" href="series.php">مسلسلات</a>
        <a id="shadow" href="animes.php">أنميات</a>
        <a id="shadow"href="<?php echo $_SERVER['PHP_SELF'];?>">تواصل معي</a>
        <span class="userSpan"><?php echo $newUser;?></span>
        <a href="logout.php" class="logout">LOGOUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div style="margin: 0 auto; text-align: center;">
        <img style="max-width: 500px;" src="img/logo.gif">
    </div>
    <div class="message">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="msg" placeholder="Message"  required>
            <input type="submit" name="submit" value="SEND">
        </form>
    </div>
    <?php 
        if (isset($_POST['submit'])) {
            include('config.php');
            $message=filter_var($_POST['msg'],FILTER_SANITIZE_STRING);
            
            if (empty($message)){
                echo "<p style='text-align:center;direction:ltr;'>Enter Message Please !";
            }
            elseif(strlen($message) < 1){
                echo "<p style='text-align:center;direction:ltr;'>Enter Message Please !";
            }
            else {
            $query="INSERT INTO messages(message) values('$message')";
            $statement=$connect->prepare($query);
            $statement->execute();
                echo "<p style='text-align:center;margin-top:100px;direction:ltr;'>Message Sent Thank You . </p>";
            }
            
        }
        
    ?>
    <div class="social">
        <a href="https://www.facebook.com/unknownkid.18">
            FACEBOOK
        </a>
        <a href="https://www.instagram.com/o.u.s.s._.a.m.a">
            INSTAGRAM
        </a>
        <a href="https://github.com/black15">
            GITHUB
        </a>
        
    </div>
</body>
    <footer>
        <marquee><p style="overflow: hidden;">Copyright 2021 - OUSSAMA</p></marquee>
        <a href="https://www.facebook.com/unknownkid.18">
            <img style="width:60px;" src="img/face.png" alt="FaceBook Logo">
        </a>
        <a href="https://www.instagram.com/o.u.s.s._.a.m.a">
            <img style="width:40px;" src="img/insta.png" alt="FaceBook Logo">
        </a>
        <a href="https://github.com/black15">
            <img style="width:50px;" src="img/github.png" alt="Github Logo">
        </a>
    </footer>
</html>