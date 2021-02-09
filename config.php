<?php
//session_start();
$dsn='mysql:host=localhost;dbname=fesdis';
$user='root';
$pass='';
try {
    $connect=new PDO($dsn,$user,$pass,array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (PDOException $err) {
    echo 'ERROR : '.$err->getMessage();
}

?>