<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['csrf_token'] )) {
    $newUser=strtoupper($_SESSION['username']);
    include('config.php');
    include('con_film.php');
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
    <title>HOME MOVIES</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div style="font-size: 18px;display: inherit; direction: rtl;margin: 40px auto; width: 190px; height: 100px;">
    <span style="margin-bottom: 7px;direction: ltr ; text-align: center; border: solid 2px; padding: 2px;float: right;"><?php echo $film ?></span>
    <a style="text-align: center; border-radius: 5px; border: solid 2px black; color:black;background-color: wheat;padding: 5px;" href="Films/<?php echo $film ?>" >التحميل من هنا</a>
    </div>
</body>
</html>
