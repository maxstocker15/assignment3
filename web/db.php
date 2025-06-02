<?php 
$host = 'db'; 
$db = 'assignment3'; 
$user = 'user'; 
$pass = 'password'; 
$dsn = "mysql:host=$host;dbname=$db;charset=utf8"; 
$pdo = new PDO($dsn, $user, $pass); 
