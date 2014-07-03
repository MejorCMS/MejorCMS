define(['modules/app', 'factories/userFactory'], function(app){

   app.controller('HomeController', ['$scope', 'User', function($scope, User){
      $scope.ctrl = 'HomeController';
      $scope.usuarios = User.getUsers();
   }]);

});