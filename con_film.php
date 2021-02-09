<?php

$chk_query="SELECT * FROM films WHERE id = " . $_GET['film'];
if(empty($_GET['film'])){
	header('location:index.php');
    }
else{
    $statement=$connect->prepare($chk_query);
    $statement->execute();
    $films=$statement->fetch(PDO::FETCH_ASSOC);
    if ($films) {
    	$film = $films['film_name'];
    	$film_id = $films['id'];
    	}
      }

?>