<?php

include('../includes/config.php');
extract($_POST);
$query="update location set name= "."'".$name."'".","." name2 ="."'".$name2."'"." where id= "."'".$id."'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($result);

