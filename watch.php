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
    <script src="js/script.js"></script>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active"><img style="width:15px;" src="img/home.png"></a>
        <a href="films.php">أفلام</a>
        <a href="series.php">مسلسلات</a>
        <a href="animes.php">أنميات</a>
        <a href="contact.php">تواصل معي</a>
        <span class="userSpan"><?php echo $newUser;?></span>
        <a href="logout.php" class="logout">LOGOUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <?php
    echo "<br>";
    echo '<div style="direction: ltr;text-align: center;margin: 0 auto">';
    echo '<span style="border: solid 3px; border-radius:7px;padding: 3px;background-color: whitesmoke">'. $film .' </span>';
    echo '</div>';
    echo "<br>";
    echo '<div style="width,height: 400px">';
    echo '<video style="position: relative;transform: translateX(-12%);padding-right:10px;margin:0 auto;max-width: 80%;max-height: 80%;" src="Films/'.$film .'" controls>';
    echo '</div>';
?>
    <br>
    <div style="margin:0 auto;width: 50%;;">
        <form action="" method="POST">
            <textarea style="text-align:center;" name="comment" placeholder="أترك تعليقا"></textarea>
            <input type="submit" name="sub_comment" value="نشر">
        </form>
        <?php
            include('comments.php');
        ?>
    </div>
    <br>
    <table style="border-radius:9px;direction:ltr;margin:0 auto;width:80%;background:#eee;text-align:center">
      <tr>
        
        <th>USER</th>
        <th>COMMENT</th>
      </tr>
      <?php foreach($comments as $row): ?>
      <tr>
        <td><?php echo $row['username'].": "; ?></td>
        <td><?php echo $row['comment']; ?></td>
        <td><?php
            echo sprintf('<a style="color:red" href="watch.php?del_comment=%d">X</a>',$row['id']);
        ?> 
        </td>
      </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
