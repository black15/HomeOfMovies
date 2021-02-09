<?php 
session_start();
//error_reporting(0);
if (isset($_SESSION['username']) && isset($_SESSION['csrf_token'] )) {
    $newUser=strtoupper($_SESSION['username']);
    include('config.php');
    
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

<div>
<?php
	$check_film="SELECT * FROM films WHERE film_name LIKE '%".$_GET['search_film']."%'";
	if (isset($_GET['sub_search'])) {
		if (empty($_GET['search_film'])) {
			header('location:index.php');
		}
		else{
			$stat=$connect->prepare($check_film);
			$stat->execute();
			$search_films=$stat->fetchAll();
			if($search_films){
                echo '<div class="row" style="max-width:600px;">';    
				foreach ($search_films as $film) {
                    echo '<div class="column" style="display:flex;">';
        			echo sprintf(' <a id ="link" href="watch.php?film=%d">',$film['id']);
                    echo sprintf('<img src="img/%s">',$film['film_image']);
                    echo '   </a>';
                    echo sprintf('<strong>%s</strong>',$film['film_name']);
                    echo sprintf('<p> %s </p>',$film['film_story']);
                    echo '</div>';
                    echo sprintf(' <a id ="link" href="download.php?film=%d"> تحميل </a>',$film['id']);
                    echo sprintf(' <a id ="link" href="watch.php?film=%d"> مشاهدة </a>',$film['id']);
				}
                echo '</div>';
            echo '</div>';
			}

            else{
                echo '<br><br><br><br><br><br><br><br><br>';
                echo '<div style="margin:0 auto;text-align:center;background-color:red;max-width:150px;border-radius:7px;border:solid black 2px;"> No Results Found </div>';
            }
		}
	}
?>
</div>
</body>
</html>