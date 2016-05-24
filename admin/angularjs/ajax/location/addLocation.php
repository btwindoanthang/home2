<?php

include('../includes/config.php');
extract($_POST);
$query="insert into location values(null,"."'".$name."',"."'".$name2."',"."0)";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($query);