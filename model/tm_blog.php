<?php
if (!empty($_POST)) {
		extract($_POST);
	} else {
		extract($_GET);
	}
        
require_once(dirname(dirname(__FILE__)).'/libs/database.php');

$dbClass= new Database();
$db=$dbClass->connect();
extract($_GET);
if ( !isset($_GET['page']) )
{
    $page = 0 ;
}
$sql='select * from blog';
$return=  mysql_query($sql);
$count_row=  mysql_num_rows($return);
$i=0;
$blog=array();
$show_page=5;
$show_start=$page*$show_page;
$page1=round($count_row/$show_page);

$sql="select * from blog limit {$show_start},{$show_page}";

 $query = mysql_query($sql);
  while($fetch = mysql_fetch_array($query))
  {
       $blog[$i]=$fetch;
       $i++;
  }
 
?>
