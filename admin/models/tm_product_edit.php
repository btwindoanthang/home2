<?php
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
        
        
require_once(dirname(dirname(dirname(__FILE__))).'/libs/database.php');

$dbClass= new Database();
$db=$dbClass->connect();

$category=array();
 $i=0;
 $sql="select * from category";
 $query = mysql_query($sql);
  while($fetch = mysql_fetch_array($query))
  {
       $category[$i]=$fetch;
       $i++;
  }
 //var_dump($category);
 
 $location=array();
 $i=0;
 $sql="select * from location";
 $query = mysql_query($sql);
  while($fetch = mysql_fetch_array($query))
  {
       $location[$i]=$fetch;
       $i++;
  }
  
   $product=array();
 $i=0;
 $sql="select * from product where id='$id'";
 $query = mysql_query($sql);
  while($fetch = mysql_fetch_array($query))
  {
       $product[$i]=$fetch;
       $i++;
  }
 // var_dump($product); exit;

?>
