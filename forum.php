<?php
session_start();
require_once(dirname(__FILE__) . '/model/tm_forum.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Forum</title>
        <link rel="stylesheet" href="">
        <!-- Latest compiled and minified JS -->
        <!-- Latest compiled and minified JS -->

        <script src="/htdocs/bootstrap/js/jquery.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="/htdocs/css/style-forum.css"/>

    </head>
    <body>
        <!-- header top -->
        <header id="header" class="header-menu-top">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo-forum" href="forum.php">
                                <img class="img-logo" src="/htdocs/image/web/logo-web.png"> 
                                <h2 class="logo-title">Forum House</h2> </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="new.php"><span class="glyphicon glyphicon-pencil"></span> Create Thread</a></li>
<!--                                <li><a href="#" title="Login" data-toggle="modal" data-target="#id-form-login">Login</a></li>
                                <li><a href="#" title="Register" data-toggle="modal" data-target="#id-form-register">Register</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img class="logo-member" src="/htdocs/image/web/icon-no-person.ico" alt="">
                                        Quynhuit <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Thong tin ca nha</a></li>
                                        <li><a href="#">Cac tin da dang</a></li>
                                        <li class="divider" role="separator"></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header><!-- END: header top -->

        <!-- main content -->
        <div class="main-wrapper">
            <div class="container">
                <!-- link category -->
                <div class="link-categor" id="id-link-categor">
                    <span><a href="/" title="">Home</a></span>
                    <span>&raquo;</span>
                    <span><a href="#" title="">Search</a></span>
<!--                    <span>&raquo;</span>
                    <span><a href="#" title="">Rent</a></span>
                    <span>&raquo;</span>
                    <span><a href="#" title="">Apparment for rent in District 1, HCM city</a></span>-->
                </div><!-- END: link category -->

                <!-- content -->
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-news">
                            <div class="content-genneral">
                                <!-- form search -->
                                <form class="form-inline form-search" action="forum.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Search" name="name">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="forsale">
                                            <option value="2">---- Type ----</option>
                                            <option value="0">Rent</option>
                                            <option value="1">Sale</option>
                                            <option value="2">All</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="cate">
                                            <option value="0">---- Type ----</option>
                                            <?php foreach ($category as $ca) { ?>
                                                <option value="<?php echo $ca['id']; ?>"><?php echo $ca['name']; ?></option>
                                            <?php } ?>
                                            <option value="0">All</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="loca">
                                            <option value="0">---- Place ----</option>
                                            <?php foreach ($location as $lo) { ?>
                                                <option value="<?php echo $lo['id']; ?>"><?php echo $lo['name']; ?></option>
                                            <?php } ?>  
                                            <option value="0">All</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-search">Search</button>
                                </form><!-- END: form search -->

                                <!-- tab news -->
                                <div class="tab-news">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#id-tab-search" aria-controls="Search" role="tab" data-toggle="tab">Search <span class="badge">100</span></a></li>
                           
<!--                                        <li role="presentation"><a href="#id-tab-rent" aria-controls="Rent" role="tab" data-toggle="tab">Rent <span class="badge">5</span></a></li>
                                        <li role="presentation"><a href="#id-tab-sale" aria-controls="Sale" role="tab" data-toggle="tab">Sale <span class="badge">0</span></a></li>-->
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="id-tab-search">
                                            <!--list news -->
                                            <ul class="list-news">
                                                <?php foreach ($forum as $fo){ ?>
                                                <!--item news -->
                                                <li class="item-news">
                                                    <img class="img-news" src="/img/product/<?php echo $fo['image']; ?>" alt="">
                                                    <div class="detail-news">
                                                        <div class="detail">
                                                            <h4 class="title"><a href="detail-new.php?id=<?php echo $fo[0] ?>" title=""><?php echo $fo['title']; ?></a></h4>
                                                            <div class="type">
                                                                <a class="type-rent" href="" title="">Rent</a>
                                                                <a class="type-sale" href="" title="">Sale</a>
                                                            </div>
                                                            <p class="price"><?php echo $fo['price']; ?> VND/month</p>
                                                            <div class="author-time">
                                                                <p class="author">
                                                                    <span>Author:</span>
                                                                    <a href="" title=""><?php echo $fo[3]; ?></a>
                                                                </p>
                                                                <p class="date">
                                                                    <span>Date post:</span>
                                                                    <a href="" title=""><?php echo $fo['datepost']; ?></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="view-comment">
                                                            <p class="view" title="Number view"><img src="/htdocs/image/web/icon-view.ico" alt="">12</p>
                                                            <div class="visible-xs clearfix"></div>
                                                            <p class="comment" title="Number comment"><img src="/htdocs/image/web/icon-comment.ico" alt="">16</p>
                                                        </div>
                                                    </div>
                                                </li> <!-- END - item news -->

                                                <?php }?>


                                            </ul> <!-- END - list news -->

                                            <!-- pagination -->
                                            <ul class="pagination news-pagin">
                                                <?php for($i=0;$i<$totalpage;$i++){ ?>
                                                <li class=""><a href="forum.php?forsale=<?php if(isset($forsale)){echo "$forsale";} ?>&loca=<?php if(isset($loca)){echo "$loca";} ?>&name=<?php if(isset($name)){echo "$name";} ?>&cate=<?php if(isset($cate)){echo "$cate";} ?>&page=<?php echo $i; ?>" ><?php echo 1+$i; ?></a></li>
                                                   
                                                    <?php } ?>
                                            </ul>
                                            <!-- End - pagination -->

                                        </div>
                                        
<!--                                        <div role="tabpanel" class="tab-pane" id="id-tab-rent">Tab rent</div>
                                        <div role="tabpanel" class="tab-pane" id="id-tab-sale">Tab sale</div>-->
                                    </div>
                                </div><!-- END: tab news -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-panel">

                            <!-- group support  -->
                            <h4 class="content-panel-title">Support</h4>
                            <div class="content-genneral support">
                                <h4><img src="/htdocs/image/web/icon-phone-2.ico" class="icon-contact" alt=""> 0933 88 3003</h4>
                                <h4><img src="/htdocs/image/web/icon-email.ico" class="icon-contact" alt="">apartment-villa@gmail.com</h4>
                                <h4 class="contact-social">
                                    <a href="" title="Twitter"><img class="icon-social" src="/htdocs/image/web/icon-twitter.ico" alt=""></a>
                                    <a href="" title="Facebook"><img class="icon-social" src="/htdocs/image/web/icon-facebook.ico" alt=""></a>
                                    <a href="" title="Google+"><img class="icon-social" src="/htdocs/image/web/icon-google-plus.ico" alt=""></a>
                                    <a href="" title="Skype"><img class="icon-social" src="/htdocs/image/web/icon-skype.ico" alt=""></a>
                                    <a href="" title="LinkedIn"><img class="icon-social" src="/htdocs/image/web/icon-linkedin.ico" alt=""></a>

                                </h4>
                            </div><!-- END: group support -->

                            <!-- category - group -->
                            <div class="content-genneral category-group">
                                <div class="list-group">
                                    <p class="list-group-item name-group">For Rent</p>
                                    <a href="#" class="list-group-item active"> Apparment <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">House <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">Building<span class="badge">30</span></a>
                                    <a href="#" class="list-group-item">Villa<span class="badge">45</span></a>
                                    <a href="#" class="list-group-item">House<span class="badge">10</span></a>
                                </div>
                            </div><!-- END: category - group -->

                            <!-- category - group -->
                            <div class="content-genneral category-group">
                                <div class="list-group">
                                    <p class="list-group-item name-group">For Sale</p>
                                    <a href="#" class="list-group-item active"> Apparment <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">House <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">Building<span class="badge">30</span></a>
                                    <a href="#" class="list-group-item">Villa<span class="badge">45</span></a>
                                    <a href="#" class="list-group-item">House<span class="badge">10</span></a>
                                </div>
                            </div><!-- END: category - group -->

                            <!-- group support  -->
                            <h4 class="content-panel-title">Safe Trade</h4>
                            <div class="content-genneral support">
                                + <b>KHÔNG</b> trả tiền trước khi nhận hàng.<br>
                                + Kiểm tra hàng cẩn thận, đặc biệt với hàng đắt tiền.<br>
                                + Hẹn gặp ở nơi công cộng.<br>
                                + Nếu bạn mua hàng hiệu, hãy gặp mặt tại cửa hàng để nhờ xác minh, tránh mua phải hàng giả.

                            </div><!-- END: group support -->

                        </div>
                    </div>
                </div><!-- END: content -->
            </div>
        </div>
        <!-- END: main content -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-content-1">
                        <img class="logo-footer" alt="" src="/htdocs/image/web/logo-web.png">
                        <p>The most Intuitive, Well Organized and Good Looking forum on the Web. It has never been so fast and easy to start giving premium support.</p>

                        <h5 class="copyright">© Copyright 2015 - xxx Company | Powered by Quynh</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 visible-md visible-lg footer-content-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 footer-content-2">
                        <h3>Information</h3>
                        <ul>
                            <li> <a href="#/terms-of-use">Terms of Use</a> </li>
                            <li> <a href="#/private-policy">Private Policy</a> </li>
                            <li> <a href="#/the-team">The Team</a> </li>
                            <li> <a href="#/comunity-rules">Community Rules</a> </li>
                            <li> <a href="#/advertise">Advertise</a> </li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 footer-content-2">
                        <h3>Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#/discussions">Discussions</a></li>
                            <li><a href="#/activity">Activity</a></li>
                            <li><a href="#/messages/all">Conversations</a></li>
                            <li><a href="#/profile">Profile</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 footer-content-2 footer-content-share">
                        <h3>Share</h3>
                        <ul>
                            <li><a href="" title="Twitter"><img class="icon-social" src="/htdocs/image/web/icon-twitter.ico" alt=""></a></li>
                            <li><a href="" title="Facebook"><img class="icon-social" src="/htdocs/image/web/icon-facebook.ico" alt=""></a></li>
                            <li><a href="" title="Google+"><img class="icon-social" src="/htdocs/image/web/icon-google-plus.ico" alt=""></a></li>
                            <li><a href="" title="Skype"><img class="icon-social" src="/htdocs/image/web/icon-skype.ico" alt=""></a></li>
                            <li><a href="" title="LinkedIn"><img class="icon-social" src="/htdocs/image/web/icon-linkedin.ico" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==============================================POP UP=============================================== -->
<!--         form-login 
        <div id="id-form-login" class="modal fade class-form-modal" role="dialog">
            <div class="modal-dialog">

                 Modal content
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form id="id-detail-login" class="class-detail-modal">
                            <div class="form-group">
                                <label for="id-input-email">Email address</label>
                                <input type="email" class="form-control" id="id-input-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="id-input-password">Password</label>
                                <input type="password" class="form-control" id="id-input-password" placeholder="Password">
                            </div>

                            <div class="inform">
                                <h4 class="forget-password"><a href="#" title="Forget password">Forget password.</a></h4>
                                <p class="infor-error">* Email or password is incorrect.</p>
                            </div>
                            <div class="form-group form-submit"><button type="submit" class="btn btn-sign-in">Sign in</button></div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>

            </div>
        </div>
         END: form-login 

         form-register 
        <div id="id-form-register" class="modal fade class-form-modal" role="dialog">
            <div class="modal-dialog">

                 Modal content
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <form id="id-detail-register" class="class-detail-modal">
                            <div class="form-group">
                                <label for="id-input-email">Email address</label>
                                <input type="email" class="form-control" id="id-input-email" placeholder="Email">
                                <p class="infor-error">* Email must be valid value.</p>
                            </div>

                            <div class="form-group">
                                <label for="id-input-password-1">Password</label>
                                <input type="password" class="form-control" id="id-input-password-1" placeholder="Password">
                                <p class="infor-error">* Password must be valid value.</p>
                            </div>

                            <div class="form-group">
                                <label for="id-input-password-2">Confirm password</label>
                                <input type="password" class="form-control" id="id-input-password-2" placeholder="Password">
                                <p class="infor-error">* Password must be valid value.</p>
                            </div>

                            <div class="form-group form-submit"><button type="submit" class="btn btn-sign-in">Sign up</button></div>

                            <div class="agreement-message">
                                Bấm vào đăng ký nghĩa là bạn đã đọc và đồng ý với
                                <a href="confirm.html" target="_blank">Điều khoản sử dụng</a>
                                của abc.com
                            </div>
                            <div class="box-bottom">
                                Do you have account?
                                <a href="#" title="Login" data-dismiss="modal" data-toggle="modal" data-target="#id-form-login">Sign in</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>

            </div>
        </div>
         END: form-login -->


    </body>
</html><!-- Latest compiled and minified CSS -->
