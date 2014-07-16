define(['modules/app', 'factories/SessionService', 'factories/FlashService'], function(app){

   return app.config(function($httpProvider){
      var logsOutUserOn401 = function($location, $q, SessionService, FlashService){
         var success = function(response){
            return response;
         }

         var error = function(response){
            if (response.status === 401) {
               SessionService.unset('authenticated');
               $location.path('/login');
               FlashService.show(response.data.flash);
            }

            return $q.reject(response);
         }

         return function(promise){
            return promise.then(success, error);
         }
      }

      $httpProvider.responseInterceptors.push(logsOutUserOn401);
   });

});