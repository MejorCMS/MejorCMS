define(['modules/app', 'factories/AuthenticationService', 'factories/FlashService'], function(app){
   return app.run(function($rootScope, $location, AuthenticationService, FlashService){
      var routesThatRequireAuth = ['/home'];

      $rootScope.$on('$routeChangeStart', function(event, next, current) {
         if (_(routesThatRequireAuth).contains($location.path()) && !AuthenticationService.isLoggedIn()) {
            $location.path('/login');
            FlashService.show('Please log in to continue.');
         };
      });

   });
});