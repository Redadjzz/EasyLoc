<?php 
$serverName="localhost";
$user="Easyloc_user";
$password="pass123";
$database="Easyloc";
$bdd = new PDO("mysql:host=$serverName;dbname=$database;charset=utf8", $user, $password);
 ?>