<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/header.php'); ?>
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/navibar.php'); ?>
<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/models/tm_product_edit.php');
?>
<?php  

?>
<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row" >
        <div class="col-lg-12">
            <ul class="breadcrumb" >
                <li class="active">
                    <span class="divider"><a href="/admin/admin.php">Home</a>/<a href="/admin/views/product/product_management.php">Product Management</a>/<a href="">Details Product</a></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Product Details</h1>
        </div>

        <!--End Page Header -->
    </div>
    <form action="/admin/controllers/product/edit_product.php" enctype="multipart/form-data" method="POST">
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Name English</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="name" class="form-control" rows="2" ><?php echo $product[0]['name']; ?></textarea>
            <input type="hidden" value="<?php echo $product[0]['id']; ?>" name="id">
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Name VietNam</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="namevi" class="form-control" rows="2" ><?php echo $product[0]['namevi']; ?></textarea>
            
        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category">
                
                <?php foreach ($category as $ca) { ?>
                    <option <?php if($product[0][1]==$ca['id']){echo 'selected';} ?> value="<?php echo $ca['id'] ?>"><?php echo $ca['name'] ?></option>
                <?php } ?>

            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Location</label>
            <select class="form-control" name="location">
                <?php foreach ($location as $lo) { ?>
                    <option <?php if($product[0][2]==$lo['id']){echo 'selected';} ?> value="<?php echo $lo['id'] ?>"><?php echo $lo['name'] ?></option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Adress</label>
            <input type="text" name="adress" class="form-control" required id="exampleInputEmail1" value="<?php echo $product[0]['adress']; ?>">

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control" min="1" required id="exampleInputEmail1" value="<?php echo $product[0]['price']; ?>">

        </div>

        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Bathroom</label>
            <select class="form-control" name="bathroom">
                <option <?php if($product[0]['bathroom']==1){echo 'selected';} ?> value="1">1</option>
                <option <?php if($product[0]['bathroom']==2){echo 'selected';} ?> value="2">2</option>
                <option <?php if($product[0]['bathroom']==3){echo 'selected';} ?> value="3">3</option>
                <option <?php if($product[0]['bathroom']==4){echo 'selected';} ?> value="4">4</option>
                <option <?php if($product[0]['bathroom']==5){echo 'selected';} ?> value="5">5</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Bedroom</label>
            <select class="form-control" name="bedroom">
                <option <?php if($product[0]['bedroom']==1){echo 'selected';} ?> value="1">1</option>
                <option <?php if($product[0]['bedroom']==2){echo 'selected';} ?> value="2">2</option>
                <option <?php if($product[0]['bedroom']==3){echo 'selected';} ?> value="3">3</option>
                <option <?php if($product[0]['bedroom']==4){echo 'selected';} ?> value="4">4</option>
                <option <?php if($product[0]['bedroom']==5){echo 'selected';} ?> value="5">5</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">For sale</label>
            <select name="forsale" class="form-control">
                <option <?php if($product[0]['forsale']==0){echo 'selected';} ?> value="0">For rent</option>
                <option <?php if($product[0]['forsale']==1){echo 'selected';} ?> value="1">For sale</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">For sale</label>
            <select name="hot" class="form-control">
                <option <?php if($product[0]['hot']==1){echo 'selected';} ?> value="1">Yes</option>
                <option <?php if($product[0]['hot']==0){echo 'selected';} ?> value="0">No</option>
            </select>

        </div>
        <div class="form-group col-lg-6">
            <label for="exampleInputEmail1">Square</label>
            <input type="number" name="square" required min="1" class="form-control" id="exampleInputEmail1" value="<?php echo $product[0]['square']; ?>">

        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Map</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="map" class="form-control" rows="2" ><?php echo $product[0]['map']; ?></textarea>
            
        </div>
        
        <div class="form-group col-lg-12" >
            <label for="exampleInputFile">Image</label>
        </div>
        <div class="form-group col-lg-12"><img height="80px" width="80px" src="/img/product/<?php echo $product[0]['image']; ?>"/>
            <input type="hidden" value="<?php echo $product[0]['image']; ?>" name="image1">
        </div>
           
        <div class="form-group col-lg-12">
            <label for="exampleInputFile">File Input</label>
            <input type="file" name="image"  id="exampleInputFile" accept="image/*">
            <p class="help-block"></p>
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Description English</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="description" id="1" class="form-control" rows="4"><?php echo $product[0]['description']; ?></textarea>
            
        </div>
        <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Description Viet Nam</label>
<!--            <input type="text" class="form-control" name="name" required  placeholder="Name Product">-->
            <textarea name="descriptionvi" id="2" class="form-control" rows="4"><?php echo $product[0]['descriptionvi']; ?></textarea>
            
        </div>
        <div class="form-group col-lg-12 ">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-primary">Cancel</button>
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


