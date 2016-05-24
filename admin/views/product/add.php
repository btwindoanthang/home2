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
                    <span class="divider"><a href="/admin/admin.php">Home</a>/<a href="/admin/views/product/product_management.php">Product Management</a>/<a href="/admin/views/product/add.php">Add Product</a></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Add Product</h1>
        </div>

        <!--End Page Header -->
    </div>
    <form action="/admin/controllers/product/add_product.php" enctype="multipart/form-data" method="POST">
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Name English</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="name" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Name VietNam</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="namevi" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category">
                <?php foreach ($category as $ca) { ?>
                    <option value="<?php echo $ca['id'] ?>"><?php echo $ca['name'] ?></option>
                <?php } ?>

            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Location</label>
            <select class="form-control" name="location">
                <?php foreach ($location as $lo) { ?>
                    <option value="<?php echo $lo['id'] ?>"><?php echo $lo['name'] ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Adress</label>
            <input type="text" name="adress" class="form-control" required id="exampleInputEmail1" placeholder="Adress">

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control" min="1" required id="exampleInputEmail1" placeholder="Price">

        </div>

        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Bathroom</label>
            <select class="form-control" name="bathroom">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Bedroom</label>
            <select class="form-control" name="bedroom">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">For sale</label>
            <select name="forsale" class="form-control">
                <option value="0">For rent</option>
                <option value="1">For sale</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Hot</label>
            <select name="hot" class="form-control">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Square</label>
            <input type="number" name="square" required min="1" class="form-control" id="exampleInputEmail1" placeholder="Square">

        </div>
         <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Map</label>
            <input type="text" name="map" class="form-control" required id="exampleInputEmail1" placeholder="map">

        </div>
        
        <div class="form-group col-lg-6" >
            <label for="exampleInputFile">File input</label>
            <input type="file" name="image" accept="image/*" id="exampleInputFile">
            <p class="help-block"></p>
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Description English</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="description" id="1" class="form-control" rows="4"></textarea>
            
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Description VietNam</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="descriptionvi" id="2" class="form-control" rows="4"></textarea>
            
        </div>
        <div class="form-group col-lg-12 ">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>

<script type="text/javascript">CKEDITOR.replace( '1'); </script>
<script type="text/javascript">CKEDITOR.replace( '2'); </script>



<footer class="footer">
    <div class="container-fluid">
        <p>&copy <a href="http://t3svietnam.com/web" target="_blank">Togepi Inc.</a>, 2015 - <?php echo date('Y'); ?></p>
    </div>
</footer>



<!-- end page-wrapper -->
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/footer.php'); ?>        


