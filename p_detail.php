
<?php

session_start();
if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 1;
}
require_once(dirname(__FILE__) . '/model/tm_main.php');

if ($_SESSION['lang'] == 1) {
    require_once(dirname(__FILE__) . '/libs/lang/en.php');
} else {
    require_once(dirname(__FILE__) . '/libs/lang/vi.php');
}

require_once(dirname(__FILE__) . '/libs/database.php');



$k = FALSE;
if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = array();

foreach ($_SESSION['cart'] as &$pro) {

    if ($pro['id'] == $EID) {
        $k = TRUE;
        break;
    }
}
if ($k) {
    
} else {
    if ($EID != null) {
        $cart_row1 = array(
            'id' => $EID,
            'img' => $img,
        );

        $_SESSION['cart'][] = $cart_row1;
    }
}


$item[] = array();
$i = 0;
if($_SESSION['lang']==1){
    $sql = "select p.id,c.name as cname,p.name as pname,p.adress,p.description,p.price,p.map,p.bedroom,p.forsale from product p,category c";
}
 else {
$sql = "select p.id,c.name2 as cname,p.namevi as pname,p.adress,p.descriptionvi as description,p.price,p.map,p.bedroom,p.forsale from product p,category c";    
}
$sql.=" where p.idcategory=c.id";
$sql.=" and p.id='$EID' ";

$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$item[$i] = $row;
                 $i++;
	}
}

$image = array();
$i = 0;
$sql = "select * from image";
$sql.= " where idproduct='$EID' ";
$query = mysql_query($sql);
$result = $mysqli->query($sql) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	while($row = $result->fetch_array()) {
		$image[] = $row;	
	}
}
?>
<div class="modal-dialog row content-dialog detail-house">
    <!-- form product -->
    <div class="row div-product">
        <!-- title product -->
        <h4 class="col-md-12 product-name" style="color: #ECA500" ><?php echo $item[0]['pname'] ?></h4>

        <!-- product-slide -->
        <div class="col-md-7 list-product-image">
        <div class="img-main hotnewsframeimage"><a class="hotnewsframeimage2" href="" title=""><img src="img/product/<?php echo $image[0]['name'] ?> " alt=""></a>
        <div class="img_next_hover">
                                                    <a class="browser_imgs next"  onclick="movescrollnext2()" title="Nhấn để xem hình kế tiếp">
                                                        ›
                                                    </a>
                                                </div>
                                                <div class=" prev_image"><a onclick="movescrollprev2();return false;" class="browser_imgs prev" title="Nhấn để xem hình trước">
                                                        ‹
                                                    </a></div>
        </div>
           
        <div class="img-childs hotnewsscroll2">
            <?php foreach ($image as $im){ ?>
                <a href="" class="hotnewsscrolle2" image="img/product/<?php echo $im['name'] ?>" title=""><img src="img/product/<?php echo $im['name'] ?>" alt=""></a>
                
            <?php } ?>
            </div>
        </div>
        <!-- End - product-slide -->

        <!-- product-info -->
        <div class="col-md-5 list-product-info">
            <div class="product-map visible-md visible-lg" id="id-product-map-pc">
                <?php echo $item[0]['map'] ?>
            </div>
            <h4 class="location visible-md visible-lg" style="color: #ECA500" ><b style="color:#fff"><?php echo constant("LOCATION"); ?>:</b> <?php echo $item[0]['adress'] ?></h4>
            <div class="product-info">
                <table>
                    <tbody >
                        <tr>
                            <td class="title">- <?php echo constant("CODE"); ?>:</td>
                            <td class="info" style="color: #ECA500">MA<?php echo $item[0]['id'] ?>  <span class="label label-success"><?php if($item[0]['forsale']==0){echo constant("RENT");}else{ echo constant("SALE");} ?></span></td>
                        </tr>
                        <tr>
                            <td class="title">- <?php echo constant("BED_ROOM"); ?>:</td>
                            <td class="info" style="color: #ECA500"><?php echo $item[0]['bedroom'] ?></td>
                        </tr>
                        <tr>
                            <td class="title">- <?php echo constant("PRICE"); ?>:</td>
                            <td class="info" style="color: #ECA500"><?php  ?>  <?php if($_SESSION['lang']!=1){echo $item[0]['price']*22000 .' '. constant("VND"); }else{ echo $item[0]['price'].' '.constant('USD');} ?></td>
                        </tr>
                        <tr>
                            <td class="title">- <?php echo constant("TYPE"); ?>:</td>
                            <td class="info"style="color: #ECA500" ><?php echo $item[0]['cname'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- End - product-info -->

        <!-- description -->
        <div class="col-md-12 description">
            <h4 class="des-title" ><?php echo constant("DESCRIPTION"); ?></h4>
            <div class="des-detail" style="color: #ECA500" ><?php echo $item[0]['description'] ?></div>
        </div>
        <!-- END - description -->

        <!-- Feature -->
        <div class="col-md-12 feature">
            <h4 class="feature-title" ><?php echo constant("FEATURE"); ?></h4>
            <div class="feature-detail">
                <a class="col-md-4" href="" title="">Swimming Pool</a>
                <a class="col-md-4" href="" title="">Gym</a>
                <a class="col-md-4" href="" title="">Garage</a>
                <a class="col-md-4" href="" title="">Tennis Court</a>
                <a class="col-md-4" href="" title="">Garden</a>
                <a class="col-md-4" href="" title="">Yard</a>
            </div>
        </div>
        
        <div class="col-md-12 feature">
            <h4 class="feature-title" ><?php echo constant("CONTACT"); ?></h4>
            <h4><span class="glyphicon glyphicon-phone-alt"></span>  0933 88 3003</h4>
            <h4><span class="glyphicon glyphicon-envelope"></span>  apartment-villa@gmail.com</h4>
            
        </div>
        <!-- END - Feature -->

        <!-- Map -->
        <div class="col-md-12 feature visible-sm visible-xs">
            <h4 class="feature-title"><?php echo constant("LOCATION"); ?></h4>
            <div class="product-map" id="id-product-map-mobi">
<?php echo $item[0]['map'] ?>
            </div>
        </div>
        <!-- END - Map -->
    </div>
    <!-- End - form product -->
</div>


