define(['modules/app'], function(app){

   app.factory('User', ['$resource', function($resource){

      return $resource('app/resources/data.json', {}, {

         getUsers: {
            method: 'GET',
            isArray: true
         }

      });

   }]);

});