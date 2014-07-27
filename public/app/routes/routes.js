define(['modules/app', 'controllers/HomeController', 'controllers/LoginController', 'controllers/CategoryController', 'controllers/ArticleController'], function(app){
   return app.config(['$routeProvider',function($routeProvider) {

      $routeProvider.when('/home', {
         controller: 'HomeController',
         templateUrl: './app/templates/home.html'
      })
      .when('/login', {
         controller: 'LoginController',
         templateUrl: './app/templates/login.html'
      })
      .when('/categories', {
         controller: 'CategoryController',
         templateUrl: './app/templates/categories.html'
      })
      .when('/articles', {
          controller: 'ArticleController',
          templateUrl:'./app/templates/articles.html'
      });

      $routeProvider.otherwise({ redirectTo: '/login' });
   }]);
});