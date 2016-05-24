<?php
session_start();

require_once(dirname(__FILE__) . '/libs/database.php');
if ($_SESSION['lang'] == 1) {
    require_once(dirname(__FILE__) . '/libs/lang/en.php');
} else {
    require_once(dirname(__FILE__) . '/libs/lang/vi.php');
}


$product = array();
$tm_p = array();
$tm_p = $_POST['EID'];
$string = '';
if (count($tm_p) != 0) {
    foreach ($tm_p as $tm) {
        $string .= " or id = '$tm' ";
    }
}

$i = 0;
$productt = array();
$sql = "select * from product where id ='' ";
if (count($tm) != 0) {
   
    $sql.=$string;
}

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$productt[] = $row;	
	}
}
?>
<div id="owl-example-2" class="block-2 owl-carousel1">
    <?php foreach ($productt as $p) { ?>
        <div class="block-child">
            <div class="block-main block-main-2">
                <a onclick="de_sel('<?php echo $p["id"] ?>', '<?php echo$p["image"] ?>')"><img src="img/product/<?php echo $p['image']; ?>" alt="" class="block-child-1"></a>
                <div class="block-child-2">
                    <ol class="ul-name">
                        <li><?php echo $p['adress']; ?> </li>
                        <li><?php ?> <?php if($_SESSION['lang']!=1){echo $p['price']*22000 .' '. constant("VND"); }else{ echo $p['price'].' '.constant('USD');} ?></li>
                        <li><?php echo $p['square']; ?>m2</li>
                        <li>Bed: <?php echo $p['bedroom'];?> - Bath: <?php echo $p['bathroom']?></li>
                        <li><?php echo $p['id'];?></li>
                    </ol>
                </div>
            </div>
        </div>
    <?php } ?>            


</div>
