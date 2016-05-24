<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 1;
}
require_once(dirname(__FILE__) . '/model/tm_main.php');
require_once(dirname(__FILE__) . '/libs/PHPMailerAutoload.php');
require_once(dirname(__FILE__) . '/model/tm_category.php');
if ($_SESSION['lang'] == 1) {
    require_once(dirname(__FILE__) . '/libs/lang/en.php');
} else {
    require_once(dirname(__FILE__) . '/libs/lang/vi.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
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
       
     
        <script src="htdocs/assets/script.js"></script>

        
        
<link rel="stylesheet" href="/htdocs/css/style-forum.css"/>

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
<!--                    <p>"Everyone can find you a house,<br/>We wil show<br/> you a Home!"</p>-->
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php" title="Home"><?php echo constant("HOME"); ?></a></li>
                    <li><a href="#" title="Contact"><?php echo constant("CONTACT"); ?></a></li>
                    <li><a href="forum.php" title="Forum"><?php echo constant("FORUM"); ?></a></li>
                    <li><a href="#" title="Forum"><?php echo constant("HOTLINE"); ?></a></li>
                </ul>
                <div class="nav-contact"><p class="number-phone">0933.88.</p><p class="number-phone">3003</p></div>
                <img src="htdocs/image/web/en.png"><img src="htdocs/image/web/vi.png">
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
                            <span ><?php echo constant("RENT"); ?></span>
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
        <div class="main-wrapper" style="min-height: 500px;">
            <div class="container">
                <!-- link category -->
                <div class="link-categor" id="id-link-categor">
                    <span><a href="/" title=""><?php echo constant("HOME"); ?></a></span>
                    <span>&raquo;</span>
                    <span><a href="/contact.php" title=""><?php echo constant("CONTACT"); ?></a></span>
<!--                    <span>&raquo;</span>
                    <span><a href="#" title="">Rent</a></span>
                    <span>&raquo;</span>
                    <span><a href="#" title="">Apparment for rent in District 1, HCM city</a></span>-->
                </div><!-- END: link category -->

                <!-- content -->
                <div class="content" style="background-color: #EEEEEE;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-news">
                            <div class="content-genneral" style="color: black;">
                                <!-- title -->
                                <h3 class="title-content"><?php echo constant("CONTACT"); ?></h3><!--END: title -->
                                <div class="detail-control ">
                                    <?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
    $admin_email = "dvthang1992@gmail.com";
  $email = $_POST['email'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $comment = $_POST['message'];  
  $mail = new PHPMailer;
 
$mail->isSMTP();
$mail->Host = 'mail.t3svietnam.com';
$mail->SMTPAuth = true;
$mail->Username = 'togepi';
$mail->Password = '0211850465';
$mail->SMTPSecure = 'tls';
$mail->port ='25';
 
$mail->From = 'dvthang1992@gmail.com';
$mail->FromName = 'Togepi';
$mail->addAddress($email, $name);
 

 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = $subject;
$mail->Body    = $comment;
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
 echo constant("THANKS");
  //Email information
  
  
  //send email
 
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
                                    <!-- form-control -->
                                    <form class="form-horizontal form-post-news" role="form" action="/contact.php" method="post" enctype="multipart/form-data">
                                        <h4 class="title-in-form"><?php echo constant("INFORMATION"); ?></h4>
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label"><?php echo constant("EMAIL"); ?></label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">Nguyen Van A</p> -->
                                                <input type="text" name="email" class="form-control" id="inputName" placeholder="Email" required="required">
                                            </div>
                                        </div>
<div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label"><?php echo constant("NAME"); ?></label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">Nguyen Van A</p> -->
                                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required="required">
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="inputEmail"><?php echo constant("SUBJECT"); ?></label>
                                            <div class="col-sm-10">
<!--						      <p class="form-control-static">email@example.com</p>-->
                                                <input type="text" name="subject" class="form-control" id="inputEmail" placeholder="Subject" required="required"> 
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="form-group">
                                            <label for="inputPhone" class="col-sm-2 control-label"><?php echo constant("MESSAGE"); ?></label>
                                            <div class="col-sm-10">
                                                <textarea name="message" id="inputNote" class="form-control" rows="3" required="required" placeholder="message"></textarea>
                                                
                                            </div>
                                        </div>

                                        <!-- Address -->

                                        <!-- button submit -->
                                        <div class="form-group form-submit" style="text-align:right;"><button type="submit" class="btn btn-post-news">Submit</button></div>



                                    </form>
                                    <?php
  }
?>
                                    <!-- END: form-control -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-panel" style="color: black; background-color: #fff;">

                            <!-- group support  -->
                            <h4 class="content-panel-title">Support</h4>
                            <div class="content-genneral support">
                                <h4><img src="htdocs/image/web/icon-phone-2.ico" class="icon-contact" alt=""> 0933 88 3003</h4>
                                <h4><img src="htdocs/image/web/icon-email.ico" class="icon-contact" alt="">apartment-villa@gmail.com</h4>
                                <h4 class="contact-social">
                                    <a href="" title="Twitter"><img class="icon-social" src="htdocs/image/web/icon-twitter.ico" alt=""></a>
                                    <a href="" title="Facebook"><img class="icon-social" src="htdocs/image/web/icon-facebook.ico" alt=""></a>
                                    <a href="" title="Google+"><img class="icon-social" src="htdocs/image/web/icon-google-plus.ico" alt=""></a>
                                    <a href="" title="Skype"><img class="icon-social" src="htdocs/image/web/icon-skype.ico" alt=""></a>
                                    <a href="" title="LinkedIn"><img class="icon-social" src="htdocs/image/web/icon-linkedin.ico" alt=""></a>

                                </h4>
                            </div><!-- END: group support -->




                        </div>
                    </div>
                </div><!-- END: content -->
            </div>
        </div>
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
        <script type="text/javascript" defer="defer" src="https://mylivechat.com/chatinline.aspx?hccid=81402691"></script>

    </body>
</html>



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
