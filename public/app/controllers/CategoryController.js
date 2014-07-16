define(['modules/app', 'factories/CategoryResource'], function(app){

   app.controller('CategoryController', function($scope, CategoryResource){
      $scope.title = 'New Category';
      $scope.category = { name:'',description:'', slug:'' };
      $scope.categories = CategoryResource.getCategories.all();

      $scope.addCategory = function(){
         CategoryResource.addCategory.newCategory($scope.category);
         $scope.categories = CategoryResource.getCategories.all();

      };
   });

});