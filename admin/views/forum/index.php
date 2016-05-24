<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/header.php'); ?>
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/navibar.php'); ?>

<script>

</script>
<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row" >
        <div class="col-lg-12">
            <ul class="breadcrumb" >
                <li class="active">
                    <span class="divider"><a href="/admin/admin.php">Home</a>/<a href="/admin/views/forum/">Forum Management</a></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Forum Management</h1>
        </div>

        <!--End Page Header -->
    </div>
    <div class="row"> 
        <div class="col-lg-12">
            <div class="tab-content">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <!-- tab - Hot property -->
                    <li class="active"><a href="#hot-property" data-toggle="tab">Check</a></li>
                    <!-- tab - For rent -->
                    <li><a href="#for-rent" data-toggle="tab">Set</a></li>
                    <!-- tab - For sale -->
                    <li><a href="#for-sale" data-toggle="tab">UnSet</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <!-- content of tab - Hot property  -->
                    <div class="tab-pane active" id="hot-property">
                        <div id="action_bar" class="row-fluid">
                            <div class="">

<!--                                <button onClick="window.location.href = '/admin/views/product/add.php'" style="display: block;" id="load"  class=" btn btn-primary pull-left ml10"><i class="fa fa-plus-square"></i> Add New</button>-->

                            </div>
                        </div>
                        <table id="usermanagement" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- END - content of tab - Hot property  -->

                    <!-- content of tab - Hot rent  -->
                    <div class="tab-pane" id="for-rent">
                        <div id="action_bar" class="row-fluid">
                            <div class="">

<!--                                <button onClick="window.location.href = '/admin/views/product/add.php'" style="display: block;" id="load"  class=" btn btn-primary pull-left ml10"><i class="fa fa-plus-square"></i> Add New</button>-->

                            </div>
                        </div>
                        <table id="usermanagement1" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="tab-pane" id="for-sale">
                        <div id="action_bar" class="row-fluid">
                            <div class="">

<!--                                <button onClick="window.location.href = '/admin/views/product/add.php'" style="display: block;" id="load"  class=" btn btn-primary pull-left ml10"><i class="fa fa-plus-square"></i> Add New</button>-->

                            </div>
                        </div>
                        <table id="usermanagement2" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <th>ID</th>

                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Post</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Train</th>
                                    <th>function</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- END - content of tab - Hot sale  -->
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container-fluid">
        <p>&copy <a href="http://t3svietnam.com/web" target="_blank">Togepi Inc.</a>, 2015 - <?php echo date('Y'); ?></p>
    </div>
</footer>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        //$('#jsontable').dataTable( {
        //     "ajax": 'arrays.txt'
        // } );

        var oTable = $('#usermanagement').dataTable();  //Initialize the datatable
        var oTable1 = $('#usermanagement1').dataTable();
        var oTable2 = $('#usermanagement2').dataTable();
//        $('#usermanagement tbody').on('click', 'tr', function() {
//            //console.log(table.row(this).data());
//            var a = oTable.fnGetData(this);
//            window.location.href = "/admin/views/product/details.php?id=" + a[0];
//        });
        $.ajax({
            url: '/admin/controllers/forum/forummanagement.php',
            dataType: 'json',
            success: function(s) {
                console.log(s);
                oTable.fnClearTable();

                for (var j = 0; j < s.length; j++)
                {

                }
                for (var i = 0; i < s.length; i++) {
                    oTable.fnAddData([
                        s[i][0],
                        s[i][1],
                        s[i][2],
                        s[i][3],
                        s[i][4],
                        s[i][5],
                        "<img height='100' width='100' src='/img/product/" + s[i][6] + " '>",
                        s[i][7] + "$",
                        s[i][8],
                        "<a style='display:inline' class='btn btn-primary mr10' href='/admin/controllers/forum/set.php?id=" + s[i][0] + " '>Set</a><a style='display:inline' class='btn mr10 btn-primary' href='/admin/controllers/forum/unset.php?id=" + s[i][0] + " '>Unset</a>"

                    ]);
                } // End For

            },
            error: function(e) {
                console.log(e.responseText);
            }
        });
        $.ajax({
            url: '/admin/controllers/forum/forummanagement1.php',
            dataType: 'json',
            success: function(s) {
                console.log(s);
                oTable1.fnClearTable();

                for (var j = 0; j < s.length; j++)
                {

                }
                for (var i = 0; i < s.length; i++) {
                    oTable1.fnAddData([
                        s[i][0],
                        s[i][1],
                        s[i][2],
                        s[i][3],
                        s[i][4],
                        s[i][5],
                        "<img height='100' width='100' src='/img/product/" + s[i][6] + " '>",
                        s[i][7] + "$",
                        s[i][8],
                        "<a style='display:inline' class='btn btn-primary mr10' href='/admin/controllers/forum/set.php?id=" + s[i][0] + " '>Set</a><a style='display:inline' class='btn mr10 btn-primary' href='/admin/controllers/forum/unset.php?id=" + s[i][0] + " '>Unset</a>"

                    ]);
                } // End For

            },
            error: function(e) {
                console.log(e.responseText);
            }
        });
        $.ajax({
            url: '/admin/controllers/forum/forummanagement2.php',
            dataType: 'json',
            success: function(s) {
                console.log(s);
                oTable2.fnClearTable();

                for (var j = 0; j < s.length; j++)
                {

                }
                for (var i = 0; i < s.length; i++) {
                    oTable2.fnAddData([
                        s[i][0],
                        s[i][1],
                        s[i][2],
                        s[i][3],
                        s[i][4],
                        s[i][5],
                        "<img height='100' width='100' src='/img/product/" + s[i][6] + " '>",
                        s[i][7] + "$",
                        s[i][8],
                        "<a style='display:inline' class='btn btn-primary mr10' href='/admin/controllers/forum/set.php?id=" + s[i][0] + " '>Set</a><a style='display:inline' class='btn mr10 btn-primary' href='/admin/controllers/forum/unset.php?id=" + s[i][0] + " '>Unset</a>"

                    ]);
                } // End For

            },
            error: function(e) {
                console.log(e.responseText);
            }
        });

    });
</script>

<script>
    function ExportExcel() {
        $.ajax({
            cache: false,
            type: 'POST',
            url: '/admin/controllers/product/export.php',
            success: function()
            {


            }
        });
    }
</script>
<script>
    function se_img(img)
    {
        alert(img);
        //  window.location.href='/admin/views/product/add.php?id='+img+"'";

    }

</script>

<link href="/htdocs/css/DT_bootstrap.css" rel="stylesheet" />
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<!-- end page-wrapper -->
<?php require_once(dirname(dirname(dirname(__FILE__))) . '/includes/footer.php'); ?>        


