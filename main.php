<?php
session_start();
require_once 'config.php';
require_once 'r.php';
$username=$passwd=$email="";
$errors=array();
if (isset($_POST['submit'])){
    $username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $passwd=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    if (!preg_match("/^[a-zA-Z-1-9' ]*$/",$username)) {
        array_push($errors, "Username Not Valid");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter Correct Email");
    }
    if (empty($username)){
        array_push($errors, "Username Is Required");
    }
    elseif (empty($passwd)) {
        array_push($errors,"Password Is Required");
    }
    elseif (empty($email)) {
        array_push($errors,"Email Is Required");
    }
    $chk_query="SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $statement=$connect->prepare($chk_query);
    $statement->execute();
    $user=$statement->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($user['username']==$username) {
            array_push($errors,"Username Already Exists !");
        }
        elseif($user['email']==$email){
            array_push($errors,"Email Already Exists !");
        }
    }
    if(count($errors)==0){
        $password=md5($passwd);
        $query="INSERT INTO users (username,passwd,email) VALUES('$username','$password','$email')";
        $final_st=$connect->prepare($query);
        $final_st->execute();
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Registration Successful";
        header('location: index.php');
    }
}
if(isset($_POST['login_sub'])){
    $username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $passwd=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    if (empty($username)){
        array_push($errors, "Username Is Required");
    }
    elseif (empty($passwd)) {
        array_push($errors,"Password Is Required");
    }
    if(count($errors)==0){
        $password=md5($passwd);
        $query = "SELECT * FROM users WHERE username='$username' AND passwd='$password'";
        $final_st=$connect->prepare($query);
        $final_st->execute();
        $nROW=$final_st->fetch(PDO::FETCH_BOTH);
        if ($final_st->rowCount() > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['valid_until'] = time() + 60*60; //1hr from now
            $_SESSION['csrf_token'] = generateRandomString(); 
            header("X-CSRF: $_SESSION[csrf_token]");
  	        header('location: index.php');
        }
        else {
            array_push($errors, "Invalid Username Or Password !");
        }

}
}
?>