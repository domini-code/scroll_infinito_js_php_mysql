<?php 
$user= 'root';
$pass ='root';
$db= 'scrollBlog';
$host= 'localhost';
$port = '3306';

$link = mysqli_init();
$coneccion=mysqli_real_connect($link, $host, $user, $pass, $db, $port);
?>