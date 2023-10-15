<?php
$host = "127.0.0.1";
$username = "root";
$password =  "";
$dbname = "practice";

try{
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
    // echo "connected";
}catch (Exception $e ){
    echo  $e->getMessage() ;
    die;
}
