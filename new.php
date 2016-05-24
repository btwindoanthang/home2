<?php
session_start();
require_once(dirname(__FILE__) . '/model/tm_forum.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dang tin</title>
        <link rel="stylesheet" href="">
        <!-- Latest compiled and minified JS -->
        <!-- Latest compiled and minified JS -->


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="/htdocs/bootstrap/js/jquery.js"></script>
        <link rel="stylesheet" href="htdocs/css/style-forum.css"/>

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
                                <img class="img-logo" src="htdocs/image/web/logo-web.png"> 
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
                                        <img class="logo-member" src="htdocs/image/web/icon-no-person.ico" alt="">
                                        Quynhuit <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Thong tin ca nha</a></li>
                                        <li><a href="#">Cac tin da dang</a></li>
                                        <li class="divider" role="separator"></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>-->
                                </li>
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
                    <span><a href="#" title="">Home</a></span>
                    <span>&raquo;</span>
                    <span><a href="#" title="">Create Thread</a></span>
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
                                <!-- title -->
                                <h3 class="title-content">Create Thread</h3><!--END: title -->
                                <div class="detail-control ">
                                    <!-- form-control -->
                                    <form class="form-horizontal form-post-news" role="form" action="model/xl_forum.php" method="post" enctype="multipart/form-data">
                                        <h4 class="title-in-form">Your Information</h4>
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">Nguyen Van A</p> -->
                                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required="required">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="inputEmail">Email</label>
                                            <div class="col-sm-10">
<!--						      <p class="form-control-static">email@example.com</p>-->
                                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required="required"> 
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="form-group">
                                            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">0168 33 56 925</p> -->
                                                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone" required="required">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea name="address" id="inputAddress" class="form-control" rows="3" required="required" placeholder="Address"></textarea>
                                            </div>
                                        </div>

                                        <h4 class="title-in-form">Content Thread</h4>

                                        <!-- Title -->
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">0168 33 56 925</p> -->
                                                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" required="required">
                                            </div>
                                        </div>

                                        <!-- Type -->
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Type</label>
                                            <div class="col-sm-10">
                                                <div class="checkbox">
                                                    <select name="forsale" class="form-control">

                                                        <option value="0">Rent</option>
                                                        <option value="1">Sale</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Type -->
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="cate">
                                                    <?php foreach ($category as $ca) { ?>
                                                        <option value="<?php echo $ca['id']; ?>"><?php echo $ca['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Place -->
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Place</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="loca">
                                                    <?php foreach ($location as $lo) { ?>
                                                        <option value="<?php echo $lo['id']; ?>"><?php echo $lo['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Detail -->
                                        <div class="form-group">
                                            <label for="inputDetail" class="col-sm-2 control-label">Detail</label>
                                            <div class="col-sm-10">
                                                <textarea name="detail" id="inputDetail" class="form-control" rows="3" required="required" placeholder="Detail"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-sm-2 control-label">Price</label>
                                            <div class="col-sm-10">
                                                <!-- <p class="form-control-static">0168 33 56 925</p> -->
                                                <input type="number" name="price" class="form-control" id="inputTitle" placeholder="Price" required="required">
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="pic1" accept="image/*"><br>
                                                <input type="file" name="pic2" accept="image/*"><br>
                                                <input type="file" name="pic3" accept="image/*"><br>
                                                <input type="file" name="pic4" accept="image/*"><br>
                                                <input type="file" name="pic5" accept="image/*"><br>
                                            </div>
                                        </div>

                                        <!-- Note -->
                                        <div class="form-group">
                                            <label for="inputNote" class="col-sm-2 control-label">Train</label>
                                            <div class="col-sm-10">
                                                <textarea name="train" id="inputNote" class="form-control" rows="3" required="required" placeholder="Note"></textarea>
                                            </div>
                                        </div>

                                        <!-- button submit -->
                                        <div class="form-group form-submit" style="text-align:right;"><button type="submit" class="btn btn-post-news">Submit</button></div>



                                    </form>
                                    <!-- END: form-control -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-panel">

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

<!--                             category - group 
                            <div class="content-genneral category-group">
                                <div class="list-group">
                                    <p class="list-group-item name-group">For Rent</p>
                                    <a href="#" class="list-group-item active"> Apparment <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">House <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">Building<span class="badge">30</span></a>
                                    <a href="#" class="list-group-item">Villa<span class="badge">45</span></a>
                                    <a href="#" class="list-group-item">House<span class="badge">10</span></a>
                                </div>
                            </div> END: category - group 

                             category - group 
                            <div class="content-genneral category-group">
                                <div class="list-group">
                                    <p class="list-group-item name-group">For Sale</p>
                                    <a href="#" class="list-group-item active"> Apparment <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">House <span class="badge">14</span></a>
                                    <a href="#" class="list-group-item">Building<span class="badge">30</span></a>
                                    <a href="#" class="list-group-item">Villa<span class="badge">45</span></a>
                                    <a href="#" class="list-group-item">House<span class="badge">10</span></a>
                                </div>
                            </div> END: category - group -->

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
                        <img class="logo-footer" alt="" src="htdocs/image/web/logo-web.png">
                        <p>The most Intuitive, Well Organized and Good Looking forum on the Web. It has never been so fast and easy to start giving premium support.</p>

                        <h5 class="copyright">© Copyright 2015 - xxx Company | Powered by Quynh</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 visible-md visible-lg footer-content-2"></div>
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 footer-content-2">
                        <h3>Information</h3>
                        <ul>
                            <li> <a href="#/terms-of-use">Terms of Use</a> </li>
                            <li> <a href="#/private-policy">Private Policy</a> </li>
                            <li> <a href="#/the-team">The Team</a> </li>
                            <li> <a href="#/comunity-rules">Community Rules</a> </li>
                            <li> <a href="#/advertise">Advertise</a> </li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 footer-content-2">
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
                            <li><a href="" title="Twitter"><img class="icon-social" src="htdocs/image/web/icon-twitter.ico" alt=""></a></li>
                            <li><a href="" title="Facebook"><img class="icon-social" src="htdocs/image/web/icon-facebook.ico" alt=""></a></li>
                            <li><a href="" title="Google+"><img class="icon-social" src="htdocs/image/web/icon-google-plus.ico" alt=""></a></li>
                            <li><a href="" title="Skype"><img class="icon-social" src="htdocs/image/web/icon-skype.ico" alt=""></a></li>
                            <li><a href="" title="LinkedIn"><img class="icon-social" src="htdocs/image/web/icon-linkedin.ico" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==============================================POP UP=============================================== -->
        <!--   form-login 
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
