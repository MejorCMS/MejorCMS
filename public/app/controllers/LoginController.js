define(['modules/app'], function(app){

   app.controller('LoginController', function($scope, $location){
      $scope.ctrl = 'LoginController';
      $scope.credentials = { email: '', password: '' };

      $scope.login = function(){

      }
   });

});