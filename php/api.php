<?php 
include 'conn.php';
$myArray = array();
$myRow = array();

if(isset($_GET['offset'])){
	$offset= $_GET['offset'];
}else{
	$offset=0;
}

if(isset($_GET['limit'])){
	$limit= $_GET['limit'];
}else{
	$limit=1;
}

$myArray['vLimit']= $limit;
$myArray['vOffset'] = $offset;


$query = "SELECT * FROM `posts` ORDER BY id ASC LIMIT ".$limit." OFFSET ".$offset;
$result = $link->query($query);


while($row=$result->fetch_array()){
	$myRow[] = array(
		"id"=> $row['id'],
		"content"=> $row['content'],
		"date"=> $row['date'] 
	);
}
$myArray['posts']= $myRow;
echo json_encode($myArray);


?>