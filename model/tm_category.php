<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');



$category = array();
$i = 0;
if($_SESSION['lang']==1)
{$sql = "select id, name from category"; }
 else {
     $sql = "select id, name2 as name from category";
}
$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);


if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$category[] = $row;	
	}
}



$location = array();
$i = 0;
if($_SESSION['lang']==1)
{
$sql = "select id, name from location";    
}
 else {
$sql = "select id, name2 as name from location";    
}

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);


if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$location[] = $row;	
	}
}
?>
