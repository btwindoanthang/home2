<?php

include('../includes/config.php');
extract($_GET);
$query="delete  from category where id="."'".$id."'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($query);