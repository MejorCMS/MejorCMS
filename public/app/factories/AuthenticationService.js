define(['modules/app', 'factories/SessionService', 'factories/FlashService'], function(app){

   app.factory('AuthenticationService', function($http, $sanitize, $location, SessionService, FlashService, CSRF_TOKEN){
      var cacheSession = function(){
         SessionService.set('authenticated', true);
      };
      var unCacheSession = function(){
         SessionService.unset('authenticated');
      };
      var loginError = function(response){
         FlashService.show(response.flash);
      };

      var sanitizeCredentials = function(credentials){
         return {
            email: $sanitize(credentials.email),
            password: $sanitize(credentials.password),
            csrf_token: CSRF_TOKEN
         }
      };

      return {
         login: function(credentials){
            var login = $http.post('auth/login', sanitizeCredentials(credentials));
            login.success(cacheSession);
            login.success(FlashService.clear);
            login.error(loginError);
            return login;
         },
         logout: function(){
            var logout = $http.get('auth/logout');
            logout.success(unCacheSession);
            return logout;
         },
         isLoggedIn: function(){
            return SessionService.get('authenticated');
         }
      }
   });

});