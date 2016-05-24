<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');


//new
$product_new = array();

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id';
$sql.=" order by p.datepost desc limit 5";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$product_new[] = $row;	
	}
}
//hot
$product_hot = array();

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id and hot="1" ';
$sql.=" order by p.datepost desc limit 5";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$product_hot[] = $row;	
	}
}
//var_dump($location);
$product = array();

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id';
$sql.=" order by id desc limit 5";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$product[] = $row;	
	}
}

$sale = array();

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id  and forsale="1" ';
$sql.=" order by id desc limit 5";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$sale[] = $row;	
	}
}
$rent = array();

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id and forsale="0" ' ;
$sql.=" order by id desc limit 5";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$rent[] = $row;	
	}
}
?>
