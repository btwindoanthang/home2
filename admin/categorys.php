<?php require_once('./layouts/header.php'); ?>
<style type="text/css">
    ul>li, a{cursor: pointer;}
</style>


<div class="row">
    <ol class="breadcrumb">
        <li><a href="./admin.php">Admin</a></li>
        <li><a href="#" class="active">Category</a></li>
        
    </ol>
</div>

<h1 class="page-header">Categorys</h1>
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
                <h5>Filtered {{ filtered.length}} of {{ totalItems}} total categorys</h5>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12" ng-show="filteredItems > 0">
                <table class="table table-striped table-bordered">
                    <thead>
                    <th>ID&nbsp;<a ng-click="sort_by('id');"><i class="fa fa-sort"></i></a></th>
                    <th>Name&nbsp;<a ng-click="sort_by('name');"><i class="fa fa-sort"></i></a></th>
                    <th>Name2&nbsp;<a ng-click="sort_by('name2');"><i class="fa fa-sort"></i></a></th>
                    <th><button id="btn-add" class="btn btn-primary btn" ng-click="modal('add')" >Add Category</button></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search | orderBy : predicate :reverse) | startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>{{data.id}}</td>
                            <td>{{data.name}}</td>
                            <td>{{data.name2}}</td>
                            <td>
                                <button class="btn btn-default btn btn-detail" id="btn-edit" ng-click="modal('edit',data.id)">Sửa</button>
                                <button class="btn btn-danger btn btn-delete" ng-click="confirmDelete(data.id)">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <h4>No customers found</h4>
                    <button id="btn-add" class="btn btn-primary btn" ng-click="modal('add')" >Add Category</button>
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
                        <form name="frmCategory" class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">English Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"  ng-model="category.name" ng-required="true" />
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.name.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Viet Nam Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name2" name="name2"  ng-model="category.name2" ng-required="true" >
                                    <span id="helpBlock2" class="help-block" ng-show="frmCategory.name2.$error.required">Pleae input!</span>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ng-disabled="frmCategory.$invalid" ng-click="save(state,id)">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>    
<script src="./angularjs/js/angular.min.js"></script>
<script src="./angularjs/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="./angularjs/app/appCategorys.js"></script>   

<?php require_once('./layouts/footer.php'); ?>



