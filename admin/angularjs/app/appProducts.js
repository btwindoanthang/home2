var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if (input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('customersCrtl', function($scope, $http, $timeout) {

    $http.get('./angularjs/ajax/product/getProducts.php').success(function(data) {
        $scope.list = data;

        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
    $scope.modal2 = function(id) {
        $http.get('./angularjs/ajax/product/getImages.php?id=' + id).success(function(response) {
            $scope.data_image = response;

//console.log(id);
            console.log($scope.data_image);
        });
        $scope.id = id;
        $("#myModal2").modal('show');
    };
    $scope.save_image = function(id) {
        var url = './angularjs/ajax/product/addImages.php';

        var formData = new FormData($("form#imageform")[0]);
        formData.append('idproduct', id);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);

                if (response == '100') {
                    alert("Please chose image file for upload image!");
                } else if (response == '101') {
                    alert("Please input image!");
                }
                else {
                    alert("ADd new item Succsess!");
                    location.reload();
                }

            }
        });
    };

    $scope.Delete = function(id, name) {
        var isConfirmDelete = confirm('Do you want do delete record?');
        if (isConfirmDelete) {
            $http.get('./angularjs/ajax/product/deleteImage.php?id=' + id + "&&name=" + name)
                    .success(function(response) {
                alert('Delete Success!');
                location.reload();
            })
                    .error(function(response) {
                console.log(response);
                alert('Have errors, Please check log');
            });
            ;
        } else {
            return false;
        }
    }
    $scope.modal = function(state, id) {
        $scope.state = state;
        console.log(id);
        switch (state) {
            case "add" :
                $('#Category')[0].reset();
                $scope.frmTitle = "Add Product";

                $http.get('./angularjs/ajax/category/getCategorys.php').success(function(response) {
                    $scope.data_category = response;

                    console.log($scope.data_category);
                });
                $http.get('./angularjs/ajax/location/getLocations.php').success(function(response) {
                    $scope.data_location = response;

                    console.log($scope.data_category);
                });
                break;
            case "edit" :

                $scope.frmTitle = "Edit Product";
                $('#image').val("");
                $http.get('./angularjs/ajax/category/getCategorys.php').success(function(response) {
                    $scope.data_category = response;

                    console.log($scope.data_category);
                });
                $http.get('./angularjs/ajax/location/getLocations.php').success(function(response) {
                    $scope.data_location = response;

                    console.log($scope.data_category);
                });
                $scope.id = id;
                $http.get('./angularjs/ajax/product/getProduct.php?id=' + id).success(function(response) {
                    $scope.data = response;
                    $scope.category = $scope.data[0];
                    $scope.category.square = parseFloat($scope.category.square, 10);
                    $scope.category.price = parseFloat($scope.category.price, 10);
                    $scope.category.forsale = parseFloat($scope.category.forsale, 10);
                    $scope.category.bathroom = parseFloat($scope.category.bathroom, 10);
                    $scope.category.hot = parseFloat($scope.category.hot, 10);
                    $scope.category.bedroom = parseFloat($scope.category.bedroom, 10);
                    console.log($scope.category);
                });
                break;
            default :
                $scope.frmTitle = "Không Biết";
                break;
        }
        $("#myModal").modal('show');
    };
    $scope.save = function(state, id) {
        //console.log(image_name);return;
        if (state == "add") {


            var url = './angularjs/ajax/product/addProduct.php';

            var formData = new FormData($("form#Category")[0]);
            formData.append('state', state);
             formData.append('id', id);
            
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == '100') {
                        alert("Please input image!");
                    } else if (response == '101') {
                        alert("Please chose image file for upload image!");
                    } else {
                        alert("ADd new item Succsess!");
                        location.reload();
                    }

                }
            });
        }

        if (state == "edit") {

            var url = './angularjs/ajax/product/editProduct.php';


            var formData = new FormData($("form#Category")[0]);
            formData.append('state', state);
            formData.append('id', id);
            
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == '100') {
                        alert("Please input image!");
                    } else if (response == '101') {
                        alert("Please chose image file for upload image!");
                    } else {
                        console.log(response);
                        alert("ADd new item Succsess!");
                        location.reload();
                    }

                }
            });
        }
    }

    $scope.confirmDelete = function(id,image_name) {
        
        var isConfirmDelete = confirm('Do you want do delete record?');
        if (isConfirmDelete) {
            $http.get('./angularjs/ajax/product/deleteproduct.php?id=' + id+ "&&image_name=" + image_name)
                    .success(function(response) {
                console.log(response);
                alert('Delete Success!');
                location.reload();
            })
                    .error(function(response) {
                console.log(response);
                alert('Have errors, Please check log');
            });
            ;
        } else {
            return false;
        }
    }
});


