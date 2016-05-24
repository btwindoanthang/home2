<?php
include('../includes/config.php');

$query="select id,name,namevi,adress,price,image,bathroom,bedroom,description,descriptionvi,map from product  where delete_flg='0' order by id desc";

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>
