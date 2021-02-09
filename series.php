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
    <title>FILMS</title>
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<script src="js/script.js"></script>
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="active"><img style="width:15px;" src="img/home.png"></a>
        <a href="films.php">أفلام</a>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>">مسلسلات</a>
        <a href="animes.php">أنميات</a>
        <a href="contact.php">تواصل معي</a>
        <span class="userSpan"><?php echo $newUser;?></span>
        <a href="logout.php" class="logout">LOGOUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <br><br><br><br><br><br><br>
    <div style="border:solid black 2px;border-radius: 5px;font-size:45px;margin: 10px 40%;background-color: red;text-align: center;"> قريبا </div>
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