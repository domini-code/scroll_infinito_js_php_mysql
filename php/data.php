<?php 
include ('conn.php');

for($x=0; $x < 50; $x++){
	$post = file_get_contents('http://loripsum.net/api/4/short', true);
	$uTime = time();
	$query="INSERT INTO `posts` (`content`, `date`) VALUES ('$post', $uTime)";
	$result = mysqli_query($link, $query);
}



 ?>