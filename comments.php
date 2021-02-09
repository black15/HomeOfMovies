<?php 
include 'con_film.php';
@$check_comment="SELECT * FROM comments JOIN users WHERE comments.user_id=users.id AND page_id='$film_id'";
$statement=$connect->prepare($check_comment);
$statement->execute();
$comments=$statement->fetchAll();
if (isset($_POST['sub_comment'])){
    $comment=filter_var($_POST['comment'],FILTER_SANITIZE_STRING);
    $theuser=$_SESSION['username']; 
    if(empty($comment)){
        echo "Please Write a Comment First";
    }
    else{
        @$query = "SELECT * FROM users WHERE username='$theuser'";
        $final_st=$connect->prepare($query);
        $final_st->execute();
        $finalUser=$final_st->fetch(PDO::FETCH_ASSOC);
        $user_id=$finalUser['id'];
        $query="INSERT INTO comments (comment,user_id,page_id) VALUES('$comment','$user_id','$film_id')";
        $final_st=$connect->prepare($query);
        $final_st->execute();
    }
}

if(isset($_GET['del_comment'])){

}


?>