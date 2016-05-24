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


$category = array();
$i = 0;
$sql = "select * from category";
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $category[$i] = $fetch;
    $i++;
}
//var_dump($category);

$location = array();
$i = 0;
$sql = "select * from location";
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $location[$i] = $fetch;
    $i++;
}
if(!isset($page))
{
    $page=0;
}

$forum = array();
$si = 0;
$sql = 'select p.id,c.name,l.name,a.name,p.title,p.datepost,p.image,p.price,p.train,p.pass,p.forsale,p.description';
$sql.=' from forum p,category c, location l, account a';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id and p.idaccount=a.phone' ;
$sql.=' and pass=1';
if(isset($name)&&$name!='' ){
    $sql.=" and p.title like'%$name%' ";
}
if(isset($loca)&&$loca!=0&&$loca!=''){
    $sql.=" and l.id='$loca'";
}
if(isset($cate)&&$cate!=0&&$cate!=''){
    $sql.=" and c.id='$cate'";
}
if(isset($forsale)&&$forsale!=2&&$forsale!=''){
    $sql.=" and p.forsale='$forsale'";
}
$totalinpage=1;
$total=  mysql_num_rows(mysql_query("$sql"));
$totalpage=$total/$totalinpage;
$start=$page*$totalinpage;
$sql.=" order by id desc limit {$start},{$totalinpage}";
//echo $sql;exit;
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $forum[$i] = $fetch;
    $i++;
}
?>
