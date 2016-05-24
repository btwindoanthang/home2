<?php
session_start();
require_once(dirname(__FILE__) . '/model/tm_product.php');
require_once(dirname(__FILE__) . '/model/tm_category.php');
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 1;
}
if ($_SESSION['lang'] == 1) {
    require_once(dirname(__FILE__) . '/libs/lang/en.php');
} else {
    require_once(dirname(__FILE__) . '/libs/lang/vi.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Villa</title>
        <link rel="stylesheet" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <link rel="stylesheet" href="htdocs/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="htdocs/bootstrap/css/half-slider.css" />
        <link rel="stylesheet" href="htdocs/css/style.css"/>
        <script src="htdocs/bootstrap/js/jquery.js"></script>
        <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
        <script src="htdocs/bootstrap/js/bootstrap.js"></script>
        <script src="htdocs/js/libs/jquery.slimscroll.js"></script><!-- customize scroll -->
        <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
        <script src="htdocs/js/lib.js"></script>
        <script src="htdocs/assets/script.js"></script>

        <link rel="stylesheet" href="htdocs/assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="htdocs/assets/owl-carousel/owl.theme.css">
        <script src="htdocs/assets/owl-carousel/owl.carousel.js"></script>
        <script src="htdocs/js/lib1.js"></script>
        <script src="htdocs/js/hotnews1.js"></script>

    </head>
    <body onload="myFunction();">
        <div class="main-web"><a  href="javascript:reload()"><img style="margin-left:80%;margin-right:5px;" src="htdocs/image/web/en.png"></a><a href="javascript:reload2()" ><img src="htdocs/image/web/vi.png"></a></div>
        <!-- content-top -->
        <div class="size-main header-content-top content-top clearfix ">
            <!-- Header Starts -->
            <header class="navbar visible-sm visible-xs">
                <div class="navbar-default customer-navbar" role="navigation">
                    <div class="container">
                        <div class="navbar-header cs-navbar-header">
                            <a class="navbar-brand logo" href="#" title="Website"><img src="htdocs/image/web/logo-web.png" alt="logo"></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Website1</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Nav Starts -->
                        <div class="navbar-collapse  collapse custumer-menu">
                            <ul class="nav navbar-nav navbar-right cs-navbar-nav">

                                <li class="active"><a  href="index.php" title="Home"><?php echo constant("HOME"); ?></a></li>
                                <li><a href="#" title="Contact"><?php echo constant("CONTACT"); ?></a></li>
                                <li><a href="forum.php" title="Forum"><?php echo constant("FORUM"); ?></a></li>
                                <li><a href="#" title="Forum"><?php echo constant("HOTLINE"); ?></a></li>
                            </ul>

                        </div>
                        <!-- #Nav Ends -->
                    </div> <!-- #Container Ends -->
                </div>
            </header>
            <!-- #Header Starts -->
            <div class="container content-top-nav visible-md visible-lg">
                <div class="nav-logo">
                    <img class="img-logo" src="htdocs/image/web/logo-web.png">
                    <p><?php echo constant("TITLE"); ?></p>
<!--                    <p>"Everyone take you a house,<br/>we take<br/> you a home"</p>-->
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php" title="Home"><?php echo constant("HOME"); ?></a></li>
                    <li><a href="#" title="Contact"><?php echo constant("CONTACT"); ?></a></li>
                    <li><a href="forum.php" title="Forum"><?php echo constant("FORUM"); ?></a></li>
                    <li><a href="#" title="Forum"><?php echo constant("HOTLINE"); ?></a></li>
                </ul>
                <div class="nav-contact"><p class="number-phone">0933.88.</p><p class="number-phone">3003</p></div>
            </div>
        </div><!-- #Header Starts -->
        <header id="myCarousel" class=" carousel slide cs-header-slider size-main">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('htdocs/image/slides/1.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div> -->
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('htdocs/image/slides/2.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div> -->
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('htdocs/image/slides/3.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div> -->
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('htdocs/image/slides/4.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div> -->
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('htdocs/image/slides/5.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div> -->
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

            <!-- Group menu -->
            <div class="group-menu">
                <!-- menu tren table - laptop -->
                <div class="container visible-xs visible-sm visible-md visible-lg">
                    <!-- child-menu-1 -->
                    <div class="child-menu">
                        <div class="title-menu col-sm-3 " style="background-color: #9D680D;">
                            <span><?php echo constant("RENT"); ?></span>
                            <a onclick="menurent()"><img class="icon-menu" id="menu-for-rent" src="htdocs/image/web/icon-menu.ico" alt=""></a>
                        </div>
                        <ul class="content-menu col-sm-9  col-md-9" id="menu-list-for-rent">
                            <?php foreach ($category as $ca) { ?>
                                <li class="li-1"><a href="product.php?idp=<?php echo $ca['id'] ?>&rule=0" title="Buildings"><?php echo $ca['name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div><!-- #child-menu-1 -->

                    <!-- child-menu-2 -->
                    <div class="child-menu">
                        <div class="title-menu col-md-3">
                            <span><?php echo constant("SALE"); ?></span>
                            <a onclick="menusale()"><img class="icon-menu" id="menu-for-sale" src="htdocs/image/web/icon-menu.ico" alt=""></a>
                        </div>
                        <ul class="content-menu col-sm-9 col-md-9" id="menu-list-for-sale">
                            <?php foreach ($category as $ca) { ?>
                                <li class="li-1"><a href="product.php?idp=<?php echo $ca['id'] ?>&rule=1" title="Buildings"><?php echo $ca['name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- #child-menu-2 -->
                </div>

                <!-- menu tren mobile -->
                <div class="container" style="display:none;">
                    <div class="row">
                        <ul>
                            <li class="col-xs-6">
                                <img src="htdocs/image/web/icon-twitter.ico" alt="">
                                <ul>
                                    <li><a href="" title="">Appartment</a></li>
                                    <li><a href="" title="">Building</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #Group menu -->
        </header>

        <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--Content-->
        <div class="content size-main">
            <div class="container content-main">

                <div class="col-md-9 col-sm-12 content-col">
                    <!-- form product -->
                    <div class="row row-left-15 div-product-slide">

                    </div>
                    <!-- End - form product -->

                    <!-- form tab product -->
                    <div class="row row-left-30 div-product-tab">
                        <div class="tab-content">
                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                <!-- tab - Hot property -->
                                <li class="active"><a href="#hot-property" data-toggle="tab"><?php echo constant("PRODUCT"); ?></a></li>
                                <!-- tab - For rent -->
<!--                                <li><a href="#for-rent" data-toggle="tab"><?php echo constant("RENT"); ?></a></li>
                                 tab - For sale 
                                <li><a href="#for-sale" data-toggle="tab"><?php echo constant("SALE"); ?></a></li>-->
                            </ul>
                            <div id="my-tab-content" class="tab-content">
                                <!-- content of tab - Hot property  -->
                                <div class="tab-pane active" id="hot-property">
                                    <!-- product -->
                                    <?php foreach ($product as $p1) { ?>
                                        <div class="product">
                                            <div class="col-md-4 col-sm-12">
                                                <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-image">
                                                    <img src="img/product/<?php echo $p1[6] ?>" alt=""/>
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-title" title=""><?php echo $p1[3] ?></a>

                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <p class="product-detail">
                                                    <span class="title"><?php echo constant("CODE"); ?>: </span>
                                                    <span class="detail">MA<?php echo $p1[0] ?>  </span><span class="label label-success"><?php if($p1[10]==0){echo constant("RENT");}else{ echo constant("SALE");} ?></span>
                                                </p>
                                                <p class="product-detail">
                                                    <span class="title"><?php echo constant("ROOMS"); ?>: </span>
                                                    <span class="detail"><?php echo $p1[9] ?></span>
                                                </p>
                                                <p class="product-detail">
                                                    <span class="title"><?php echo constant("PRICE"); ?>: </span>
                                                    <span class="detail"><?php ?><?php if($_SESSION['lang']!=1){echo $p1[7]*22000 .' '. constant("VND"); }else{ echo $p1[7].' '.constant('USD');} ?></span>
                                                </p>
                                                <p class="product-detail">
                                                    <span class="title"><?php echo constant("LOCATION"); ?>: </span>
                                                    <span class="detail"><?php echo $p1[2] ?></span>
                                                </p>
                                                <p class="product-detail">
                                                    <span class="title"><?php echo constant("TYPE"); ?>: </span>
                                                    <span class="detail"><?php echo $p1[1] ?></span>
                                                </p>
                                            </div>
                                            <span class="clear-border"></span>
                                        </div>
<?php } ?>
                                    <!-- End - product -->

                                    <!-- product -->

                                    <!-- End - product -->

                                    <!-- product -->

                                    <!-- End - product -->

                                    <!-- pagination -->
                                    <ul class="pagination product-pagin center">
                                        <li><a href="product.php?rule=<?php echo "$rule"; ?>&idp=<?php echo "$idp"; ?>&page=<?php if($page+1>1){ echo $page-1;} ?>"><<</a></li>
<?php for ($i = 0; $i < $totalpage; $i++) { ?>

                                            <li class="<?php if($page==$i){echo 'active';} ?>"><a href="product.php?rule=<?php echo "$rule"; ?>&idp=<?php echo "$idp"; ?>&page=<?php echo $i; ?>" ><?php echo 1 + $i; ?></a></li>

<?php } ?>
                                            <li><a  href="product.php?rule=<?php echo "$rule"; ?>&idp=<?php echo "$idp"; ?>&page=<?php if($page<$totalpage-1){echo $page+1;} ?>">>></a></li>      
                                    </ul>
                                    <!-- End - pagination -->
                                </div>
                                <!-- END - content of tab - Hot property  -->

                                <!-- content of tab - Hot rent  -->
                                <!--                                <div class="tab-pane" id="for-rent">
                                                                     product 
<?php foreach ($product as $p1) { ?>
                                                                                <div class="product">
                                                                                    <div class="col-md-4 col-sm-12">
                                                                                        <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-image">
                                                                                            <img src="img/product/<?php echo $p1[6] ?>" alt=""/>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-sm-12">
                                                                                        <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-title" title=""><?php echo $p1[3] ?></a>
                                                                                        
                                                                                        </div>
                                                                                    <div class="col-md-8 col-sm-12">
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("CODE"); ?>: </span>
                                                                                            <span class="detail">MA<?php echo $p1[0] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("ROOMS"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[9] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("PRICE"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[7] ?>$</span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("LOCATION"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[2] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("TYPE"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[1] ?></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <span class="clear-border"></span>
                                                                                </div>
<?php } ?>
                                                                     End - product 
                                                                </div>-->
                                <!-- END - content of tab - Hot rent  -->

                                <!-- content of tab - Hot sale  -->
                                <!--                                <div class="tab-pane" id="for-sale">
<?php foreach ($product as $p1) { ?>
                                                                                <div class="product">
                                                                                    <div class="col-md-4 col-sm-12">
                                                                                        <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-image">
                                                                                            <img src="img/product/<?php echo $p1[6] ?>" alt=""/>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-sm-12">
                                                                                        <a onclick="de_sel('<?php echo $p1["id"] ?>', '<?php echo$p1["image"] ?>')" class="product-title" title=""><?php echo $p1[3] ?></a>
                                                                                        
                                                                                        </div>
                                                                                    <div class="col-md-8 col-sm-12">
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("CODE"); ?>: </span>
                                                                                            <span class="detail">MA<?php echo $p1[0] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("ROOMS"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[9] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("PRICE"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[7] ?>$</span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("LOCATION"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[2] ?></span>
                                                                                        </p>
                                                                                        <p class="product-detail">
                                                                                            <span class="title"><?php echo constant("TYPE"); ?>: </span>
                                                                                            <span class="detail"><?php echo $p1[1] ?></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <span class="clear-border"></span>
                                                                                </div>
<?php } ?>
                                                                </div>-->
                                <!-- END - content of tab - Hot sale  -->
                            </div>
                        </div>
                    </div>
                    <!-- End - tab product -->

                </div>
                <div class="col-md-3 col-sm-12 content-col">
                    <form action="search.php" method="post">
                        <!-- form search -->
                        <div class=" row search-form">
                            <h4 class="content-title"><?php echo constant("FIND_HOME"); ?></h4>
                            <div class="row" style="margin-bottom:10px;">
                                <div class="col-lg-12">
                                    <label class="radio-inline lable-input"><input type="radio" class="optradio" onchange="change(0);" name="optradio" value="1" checked="checked" onclick="ch_sel();"><?php echo constant("SALE"); ?></label>
                                    <label class="radio-inline lable-input"><input type="radio" class="optradio" onchange="change(1);" name="optradio" value="0" onclick="ch_sel();"><?php echo constant("RENT"); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="lable-input"><?php echo constant("CATEGORY"); ?></label>
                                    <select class="form-control" name="cate">
                                        <?php foreach ($category as $lo) { ?>
                                            <option value="<?php echo $lo['id']; ?>"><?php echo $lo['name']; ?></option>
                                        <?php } ?>  

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="lable-input"><?php echo constant("LOCATION"); ?></label>
                                    <select class="form-control" name="loca">
                                        <?php foreach ($location as $lo) { ?>
                                            <option value="<?php echo $lo['id']; ?>"><?php echo $lo['name']; ?></option>
<?php } ?>  

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12">
                                        <label class="lable-input">Home</label>
                                                <input type="text" class="form-control" placeholder="Enter name home">
                                        </div>
                                <div class="col-lg-5">
                                        <label class="lable-input">Type</label>
                                        <select class="form-control">
                                                <option>Rent</option>
                                                <option>Sale</option>
                                        </select>
                                </div> -->
                                <div class="col-md-12">
                                    <label class="lable-input"><?php echo constant("PRICE"); ?></label>
                                    <div id="range">
                                        <select class="form-control" name="range">
                                            <option value="1">$50000-$100000 </option>
                                            <option value="2">$200000-$300000 </option>
                                            <option value="3">$300000-$400000 </option>
                                            <option value="4">$400000  - <?php echo constant("ABOVE"); ?></option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="lable-input"><?php echo constant("BED_ROOM"); ?></label>
                                    <select class="form-control" name="bed">\
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="lable-input"><?php echo constant("BATH_ROOM"); ?></label>
                                    <select class="form-control" name="bath">\
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>

                            <button class="btn cs-btn col-lg-12 col-md-12 col-xs-12 cold-sm-12" type="submit"  title="Find"><?php echo constant("FIND"); ?></button>

                        </div>
                        <!-- End - form search -->
                    </form>
                    <!-- location  -->
                    <div class=" row search-form">
                        <br/><br/>
                            <div class="list-group">
                                <p class="list-group-item name-group" style="color: black; background-color: #12BAD1;">Location</p>
                                    <?php foreach ($location as $lo) { ?>
                                    <a class="list-group-item" href="./search.php?idlocation=<?php echo $lo['id']; ?>"> <?php echo $lo['name']; ?> </a>   
                                            
                                    <?php } ?>  
                                    
                                </div>
                        </div>
                    <!-- form contact -->
                    <form class="row form-compare">
                        <h4 class="content-title"><?php echo constant("CONTACT"); ?></h4>
                        <h4><img src="htdocs/image/web/icon-phone-2.ico" class="icon-contact" alt=""> 0933 88 3003</h4>
                        <h4><img src="htdocs/image/web/icon-email.ico" class="icon-contact" alt="">apartment-villa@gmail.com</h4>
                        <h4 class="contact-social">
                            <a href="" title="Twitter"><img class="icon-social" src="htdocs/image/web/icon-twitter.ico" alt=""></a>
                            <a href="" title="Facebook"><img class="icon-social" src="htdocs/image/web/icon-facebook.ico" alt=""></a>
                            <a href="" title="Google+"><img class="icon-social" src="htdocs/image/web/icon-google-plus.ico" alt=""></a>
                            <a href="" title="Skype"><img class="icon-social" src="htdocs/image/web/icon-skype.ico" alt=""></a>
                            <a href="" title="LinkedIn"><img class="icon-social" src="htdocs/image/web/icon-linkedin.ico" alt=""></a>

                        </h4>
                    </form>
                    <!-- End - Form contact -->

                    <!-- form compare -->
                    <form class="row form-compare">
                        <h4 class="content-title"><?php echo constant("COMPARE_VIEW"); ?></h4>
                        <p><?php echo constant("COMPARE_TITLE"); ?></p>

                        <div id="compare"></div>
                        <!-- Trigger the popup-compare with a button -->
                        <button type="button" onclick="co_sel()" class="btn cs-btn cs-btn-compare col-lg-12 col-md-12 col-xs-12 cold-sm-12"  title="Compare"><?php echo constant("COMPARE"); ?></button>

                    </form>
                    <!-- END - form compare -->
                </div>
            </div>
        </div>


        <!--#End Content-->

        <!--popup-modal-->
        <div class="main-popup">


            <!--popup compare-->
            <div class="modal fade content-popup" id="popup-compare" role="dialog">
                <div class="container">
                    <div class="modal-dialog content-dialog1">
                        <div class="block-1">
                            <h3 class="block-1-title"><?php echo constant("COMPARE"); ?></h3>

                            <div class="block-main block-main-1">
                                <div class="block-child-1"></div>
                                <div class="block-child-2">
                                    <ol class="ul-name">
                                        <li><?php echo constant("LOCATION"); ?></li>
                                        <li><?php echo constant("PRICE"); ?></li>
                                        <li><?php echo constant("SQUARE"); ?></li>
                                        <li><?php echo constant("ROOMS"); ?></li>
                                        <li><?php echo constant("CODE"); ?></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div id="content"></div>
                        <div class="block-3">
                            <a class="btn-prev prev" style=""><img class=""  src="htdocs/image/web/prev.png" alt="prev" title="prev"></a>
                            <a class="btn-next next " style="float: right;"><img class=" " src="htdocs/image/web/next.png" alt="next" title="next"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END popup compare-->

            <!--popup view detail house-->
            <div class="modal fade content-popup" id="popup-view-house" role="dialog">
                <div class="container" id="detail">

                </div>
            </div>
            <!--END popup view detail house-->

        </div>
        <!--End popup-modal-->

        <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--Footer-->
        <div class="clearfix size-main footer">
            <div class="container cs-footer">
                <div class="col-md-12 footer-child text-center">
                    <p>Copyright by Tin Viet Co.,Ltd. 2015</p>
                </div>
            </div>
        </div>
        <!--#End Footer-->
    </body>
</html>
<script>
                                function de_sel(id, img)
                                {
                                    $.ajax({
                                        cache: false,
                                        type: 'POST',
                                        url: 'p_detail.php',
                                        data: {EID: id, img: img},
                                        success: function(data)
                                        {

                                            $('#detail').html(data);
                                            $.getScript("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize");
                                            $('#popup-view-house').modal('show');
                                            $("#compare").load('compare.php');
                                        }
                                    });
                                }

</script>
<script>
    function co_sel()
    {
        var aArray = [];
        $('.chk:checked').each(function() {
            aArray.push($(this).val());
        });
        $('#owl-example-2').remove();
        if (aArray.length == 0)
        {
            alert('Please choices item compare!');
            return;
        }
        else {

            $.ajax({
                cache: false,
                type: 'POST',
                url: 'compare-item.php',
                data: {EID: aArray},
                success: function(data)
                {

                    $('#content').html(data);
                    $('#popup-compare').modal('show');
                    owl = $("#owl-example-2");
                    owl.owlCarousel({items: 3,
                    });
                    $('#owl-example-2 .carousel').carousel('cycle');

                    $(".next").click(function() {
                        owl.trigger('owl.next');
                    })
                    $(".prev").click(function() {
                        owl.trigger('owl.prev');
                    })
                }
            });
        }
    }

</script>
<script>
    var auto_refresh = setInterval(function() {
        movescrollnext();
    }, 5000);
</script>
<script>
    function menurent() {
        if (!$('#menu-list-for-rent').is(':visible')) {
            $('#menu-list-for-rent').css('display', 'block');
            $('#menu-list-for-sale').css('display', 'none');
        } else {
            $('#menu-list-for-rent').css('display', 'none');
        }
    }
    function menusale() {
        if (!$('#menu-list-for-sale').is(':visible')) {
            $('#menu-list-for-sale').css('display', 'block');
            $('#menu-list-for-rent').css('display', 'none');
        } else {
            $('#menu-list-for-sale').css('display', 'none');
        }
    }
</script>

<script>
    function change(x)
    {
        if (x ==0)
        {
            
            $('#range').html('<select class="form-control" name="range"><option value="1">$50000 - $100000</option><option value="2">$100000 - $200000</option><option value="3">$200000 - $300000</option><option value="4">$300000 - Above</option></select>');   
        }
        else
        {
            $('#range').html('<select class="form-control" name="range"><option value="5">$100-$200</option><option value="6">$200-$300</option><option value="7">$300-$400</option><option value="8">$400 - Above</option></select>');
        }
    }
    function reload() {

        $.ajax({
            cache: false,
            type: 'POST',
            url: 'en.php',
            data: {value: 1},
            success: function(data)
            {

                location.reload();

            }
        });



    }
    function reload2() {

        $.ajax({
            cache: false,
            type: 'POST',
            url: 'en.php',
            data: {value: 2},
            success: function(data)
            {


                location.reload();
            }
        });



    }
     function myFunction(){
    $("#compare").load('compare.php');
    }
</script>