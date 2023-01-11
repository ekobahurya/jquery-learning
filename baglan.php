<?php 
$host = 'localhost';
$dbname = 'jquery';
$username = 'root';
$password = '123456789';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$baglanamk = new PDO($dsn, $username, $password);
?>
