<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');

$dbClass = new Database();
$db = $dbClass->connect();


//var_dump($location);
$product = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}
$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id';

if (isset($idp)) {
    $sql .=" and idcategory = '$idp' ";
}
if (isset($rule)) {
    $sql .=" and forsale = '$rule' ";
}
if(!isset($page))
{
    $page=0;
}
$totalinpage = 2;
$total = mysql_num_rows(mysql_query("$sql"));

$totalpage = $total / $totalinpage;


$start = $page * $totalinpage;
$sql.=" order by id desc limit {$start},{$totalinpage}";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $product[$i] = $fetch;
    $i++;
}


$title = 'New House';
if (isset($rule)) {
    switch ($rule) {
        case 0:
            $title = 'For Rent';
            break;
        case 1:
            $title = 'For Sale';
            break;
    }
}
//var_dump($product); 
?>
