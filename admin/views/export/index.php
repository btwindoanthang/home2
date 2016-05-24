<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/header.php'); ?>
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/navibar.php'); ?>

<div id="page-wrapper">

    <div class="row" >
        <div class="col-lg-12">
            <ul class="breadcrumb" >
                <li class="active">
                    <span class="divider"><a href="/admin/admin.php">Home</a>/Download excel
                </li>
            </ul>
        </div>
    </div>
      <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Download Excel</h1>
        </div>

        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form class="form-group" action="/admin/controllers/product/export.php">
             
                <div class="form-group">
                    <select class="form-control" name="name">
                        <option value="2">all</option>
                        <option value="0"> Rent</option>
                        <option value="1">Sale</option>
                    </select>
                    
                </div>
                <button type="submit" class="btn btn-default">Download</button>
            </form>
        </div>
    </div>
</div>


<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/footer.php'); ?>
