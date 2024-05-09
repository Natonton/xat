<?php
    date_default_timezone_set("Asia/Manila");
    $dateNow = date('Y-m-d H:i:s');
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "xat";
    
    try{
        $conn = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>
