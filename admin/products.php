<?php require_once('./layouts/header.php'); ?>
<style type="text/css">
    ul>li, a{cursor: pointer;}
</style>


<div class="row">
    <ol class="breadcrumb">
        <li><a href="./admin.php">Admin</a></li>
        <li><a href="#" class="active">Products</a></li>
        
    </ol>
</div>

<h1 class="page-header">Products</h1>
<div  ng-app="myApp"> 
    <div ng-controller="customersCrtl">

        <div class="row">
            <div class="col-md-2">PageSize:
                <select ng-model="entryLimit" class="form-control">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="col-md-3">Filter:
                <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
            </div>
            <div class="col-md-4">
                <h5>Filtered {{ filtered.length}} of {{ totalItems}} total locations</h5>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12" ng-show="filteredItems > 0">
                <table class="table table-striped table-bordered">
                    <thead>
                    <th >ID&nbsp;<a ng-click="sort_by('id');"><i class="fa fa-sort"></i></a></th>
                    <th>Name EN&nbsp;<a ng-click="sort_by('name');"><i class="fa fa-sort"></i></a></th>
                    <th>Name VI&nbsp;<a ng-click="sort_by('namevi');"><i class="fa fa-sort"></i></a></th>


                    <th width="30">Address&nbsp;<a ng-click="sort_by('adress');"><i class="fa fa-sort"></i></a></th>
                    <th>Image&nbsp;<a ng-click="sort_by('image');"><i class="fa fa-sort"></i></a></th>
                    <th>Price&nbsp;<a ng-click="sort_by('price');"><i class="fa fa-sort"></i></a></th>
                    <th>Bathroom&nbsp;<a ng-click="sort_by('bathroom');"><i class="fa fa-sort"></i></a></th>
                    <th>Bedroom&nbsp;<a ng-click="sort_by('bedroom');"><i class="fa fa-sort"></i></a></th>


                    <th>Derscription EN&nbsp;<a ng-click="sort_by('description');"><i class="fa fa-sort"></i></a></th>
                    <th>Description VI English&nbsp;<a ng-click="sort_by('descriptionvi');"><i class="fa fa-sort"></i></a></th>
                    <th>Map&nbsp;<a ng-click="sort_by('map');"><i class="fa fa-sort"></i></a></th>
                    <th><button id="btn-add" class="btn btn-primary btn" ng-click="modal('add')" >Add New Product</button></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search | orderBy : predicate :reverse) | startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>{{data.id}}</td>
                            <td>{{data.name}}</td>
                            <td>{{data.namevi}}</td>

                            <td>{{data.adress}}</td>
                            <td><img height="100" width="100" src="../img/product/{{data.image}}"/></td>
                            <td>{{data.price}}</td>
                            <td>{{data.bathroom}}</td>
                            <td>{{data.bedroom}}</td>

                            <td>{{data.description}}</td>
                            <td>{{data.descriptionvi}}</td>
                            <td>{{data.map}}</td>

                            <td>
                                <button class="btn btn-default btn btn-xs btn-detail" id="btn-edit" ng-click="modal('edit',data.id)">Edit</button>
                                <button class="btn btn-default btn-xs" id="btn-edit" ng-click="modal2(data.id)">Image</button>
                                <button class="btn btn-danger btn btn-xs btn-delete" ng-click="confirmDelete(data.id,data.image)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <button id="btn-add" class="btn btn-primary btn" ng-click="modal('add')" >Add New Product</button>
                    <h4>No customers found</h4>
                </div>
            </div>
            <div class="col-md-12" ng-show="filteredItems > 0">    
                <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>


            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" role="dialog" id="myModal">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">{{ frmTitle }}</h4>
                    </div>
                    <div class="modal-body">
                        <form name="frmCategory" class="form-horizontal" id="Category" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Name VI</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="namevi" name="namevi"  ng-model="category.namevi" ng-required="true" />
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.namevi.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Name EN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"  ng-model="category.name" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.name.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">ID Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="idcategory" name="idcategory"  ng-model="category.idcategory" ng-required="true">
                                        <option ng-repeat="cate in data_category"  value="{{cate.id}}">{{cate.name}}</option>
                                    </select>
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.idcategory.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="inputEmail3" class="col-sm-3 control-label">ID Location</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="idlocaion" name="idlocaion"  ng-model="category.idlocation" ng-required="true">
                                        <option ng-repeat="loca in data_location" value="{{loca.id}}">{{loca.name}}</option>
                                    </select>
                                    </select>
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.idlocaion.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="adress" name="adress"  ng-model="category.adress" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.adress.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file"  id="image" name="image"  >

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="price" name="price"  ng-model="category.price" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.price.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Bathroom</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="bathroom" name="bathroom"  ng-model="category.bathroom" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.bathroom.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Bedroom</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="bedroom" name="bedroom"  ng-model="category.bedroom" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.bedroom.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">For sale</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="forsale" name="forsale"  ng-model="category.forsale" ng-required="true">
                                        <option value="0">For Rent</option>
                                        <option value="1">For Sale</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Hot</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="hot" name="hot"  ng-model="category.hot" ng-required="true">
                                        <option value="0">No hot</option>
                                        <option value="1">Hot</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Square</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="square" name="square"  ng-model="category.square" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.square.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Description VI</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="descriptionvi" name="descriptionvi"  ng-model="category.descriptionvi" ng-required="true"  rows="6"></textarea>

                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.descriptionvi.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Description EN</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description"  ng-model="category.description" ng-required="true"  rows="6"></textarea>

                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.description.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Map</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="map" name="map"  ng-model="category.map" ng-required="true"  rows="6"></textarea>
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.map.$error.required">Pleae input!</span>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" ng-disabled="frmCategory.$invalid" ng-click="save(state,id,category.image)">Save</button>
                            </div>
                        </form>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
         <div class="modal fade" role="dialog" id="myModal2">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Image</h4>
                    </div>
                    <div class="modal-body">
                        <form name="imageform" class="form-horizontal" id="imageform" method="post" enctype="multipart/form-data">
                            
                            
                           
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label"  >Image</label>
                                <div class="col-sm-9">
                                    <input type="file"  id="file" name="file[]" multiple ng-required="true">

                                </div>
                            </div>
                            
                           

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" ng-disabled="imageform.$invalid" ng-click="save_image(id)">Save</button>
                            </div>
                        </form>
                        
                         <table class="table table-striped table-bordered">
                    <thead>
                    <th >ID</th>
                    <th>Name</th>
                 
                    <th></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in data_image">
                            <td>{{data.id}}</td>
                            <td><img height="100" width="100" src="../img/product/{{data.name}}"/></td>
                            <td>
                                
                                <button class="btn btn-danger btn btn-delete" ng-click="Delete(data.id,data.name)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>    
<script src="./angularjs/js/angular.min.js"></script>
<script src="./angularjs/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="./angularjs/app/appProducts.js"></script>   

<?php require_once('./layouts/footer.php'); ?>



