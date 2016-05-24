<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/header.php'); ?>
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/navibar.php'); ?>
<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/models/tm_product.php');
?>

<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row" >
        <div class="col-lg-12">
            <ul class="breadcrumb" >
                <li class="active">
                    <span class="divider"><a href="/admin/admin.php">Home</a>/<a href="/admin/views/product/product_management.php">Product Management</a>/<a href="">Add Image</a></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Add Image</h1>
        </div>

        <!--End Page Header -->
    </div>
    <form action="/admin/controllers/product/add_image.php?idp=<?php echo $_GET['idp']  ?>" enctype="multipart/form-data" method="POST">
       
       
        <div class="form-group col-lg-12" >
            <label for="exampleInputFile">File input</label>
            <input type="file" name="image" accept="image/*" id="exampleInputFile">
            <p class="help-block"></p>
        </div>
        <div class="form-group col-lg-12 ">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>

</div>






<footer class="footer">
    <div class="container-fluid">
        <p>&copy <a href="http://t3svietnam.com/web" target="_blank">Togepi Inc.</a>, 2015 - <?php echo date('Y'); ?></p>
    </div>
</footer>



<!-- end page-wrapper -->
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/footer.php'); ?>        


