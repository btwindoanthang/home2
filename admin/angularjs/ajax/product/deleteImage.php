<?php

include('../includes/config.php');
extract($_GET);
$path="/img/product/";
if(file_exists(dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$name)){
    unlink(dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$name);
}
$query="delete from image   where id="."'".$id."'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($query);
