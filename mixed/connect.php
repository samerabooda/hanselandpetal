<?php
$message='';	
$dsn = 'mysql:host=localhost;dbname=hanselandpetal';
$user='samer';
$password='123';
$option=array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
$conn = new PDO($dsn,$user,$password,$option);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){
    echo "faied" . $e->getMessage();
}



?>