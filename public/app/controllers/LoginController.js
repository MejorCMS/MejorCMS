define(['modules/app', 'factories/AuthenticationService'], function(app){

   app.controller('LoginController', function($scope, $location, AuthenticationService){
      $scope.ctrl = 'LoginController';
      $scope.credentials = { email: '', password: '' };

      $scope.login = function(){
         AuthenticationService.login($scope.credentials).success(function(){
            alert('ir a home');
            $location.path('/home');
         });
      }
   });

});