<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}

//echo $ca.'-'.$lo ; exit;
require_once(dirname(dirname(__FILE__)) . '/libs/database.php');

$dbClass = new Database();
$db = $dbClass->connect();
$sql = 'select p.id,a.name,a.phone,a.email,p.title,p.datepost,p.image,p.price,p.train,p.pass,p.forsale,p.description';
$sql.=' from forum p, account a';
$sql.=' where p.idaccount=a.phone' ;
$sql .= " and p.id='$id'";

$forum = array();
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $forum[0] = $fetch;
}

$sql = "select * from imageforum  where idforum='$id'";

$imageforum = array();
$i=0;
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $imageforum[$i] = $fetch;
    $i++;
}
//var_dump($imageforum);exit;
?>
