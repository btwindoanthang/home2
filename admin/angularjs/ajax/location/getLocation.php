<?php
include('../includes/config.php');

$query="select id, name, name2 from location  "; 
$query.=" where id=".$_GET['id'];
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

 $arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}

$json_response = json_encode($arr);
echo $json_response;
?>
