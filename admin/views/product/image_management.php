<?php require_once(dirname(dirname(dirname(__FILE__))).'/includes/header.php'); ?>
<?php require_once(dirname(dirname(dirname(__FILE__))).'/includes/navibar.php'); ?>


        <!--  page-wrapper -->
        <div id="page-wrapper">
           
            <div class="row" >
                <div class="col-lg-12">
                <ul class="breadcrumb" >
                    <li class="active">
                        <span class="divider"><a href="/admin/admin.php">Home</a>/<a href="/admin/views/product/product_management.php">Product Management</a>/<a href="">Image Management</a></span>
                    </li>
                </ul>
                </div>
            </div>
            
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Image Management</h1>
                </div>
                
                <!--End Page Header -->
            </div>
        <div id="action_bar" class="row-fluid">
          <div class="">
            
            <button onClick="window.location.href='/admin/views/product/add_image.php?idp=<?php echo $_GET['id'] ?>' " style="display: block;" id="load"  class=" btn btn-primary pull-left ml10"><i class="fa fa-plus-square"></i> Add New</button>
            
          </div>
        </div>
            <table id="usermanagement" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Product</th>
                <th>Image</th>
                <th>function</th>
            </tr>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>ID</th>
                <th>ID Product</th>
                <th>Image</th>
                <th>function</th>
            </tr>
        </tfoot>
    </table>
</div>
            
<footer class="footer">
		  <div class="container-fluid">
			<p>&copy <a href="http://t3svietnam.com/web" target="_blank">Togepi Inc.</a>, 2015 - <?php echo date('Y');?></p>
		  </div>
		</footer>
        </div>
       
        <script type="text/javascript">
$(document).ready(function() {
	
	//$('#jsontable').dataTable( {
   //     "ajax": 'arrays.txt'
   // } );

var oTable = $('#usermanagement').dataTable();  //Initialize the datatable

		$.ajax({
			type:'GET',
                        url: '/admin/controllers/product/image_management.php?idp=<?php echo $_GET['id']; ?>',
			dataType: 'json',
			success: function(s){
			console.log(s);
					oTable.fnClearTable();
                                        for(var j=0;j<s.length;j++)
                                        {
                                            
                                        }
					 	for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                                    s[i][0],
                                    s[i][1],
                                   
                                    "<img height='100' width='100' src='/img/product/" +s[i][2] +" '>",
                                    
                                    
                                   "<a class='btn btn-primary' href='/admin/controllers/product/delete_image.php?id=" +s[i][0] +"&idp="+s[i][1]+" '>Delete</a>"
                                      	   ]);										
										} // End For
										
			},
			error: function(e){
			   console.log(e.responseText);	
			}
			});
		
	
});
</script>
<script>
function se_img(img)
{
    window.location.href='/admin/views/product/add.php?id='+img+"'";

}
</script>
 <link href="/htdocs/css/DT_bootstrap.css" rel="stylesheet" />
 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- end page-wrapper -->
<?php require_once(dirname(dirname(dirname(__FILE__))).'/includes/footer.php'); ?>        
    

