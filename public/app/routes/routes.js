define(['modules/app', 'controllers/HomeController', 'controllers/LoginController'], function(app){
   return app.config(['$routeProvider',function($routeProvider) {

      $routeProvider.when('/', {
         controller: 'HomeController',
         templateUrl: './app/templates/home.html'
      })
      .when('/login', {
         controller: 'LoginController',
         templateUrl: './app/templates/login.html'
      });

      $routeProvider.otherwise({ redirectTo: '/login' });
   }]);
});