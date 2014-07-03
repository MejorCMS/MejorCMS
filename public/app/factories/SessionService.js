define(['modules/app'], function(app){

   app.factory('SessionService', function(){
      return {
         get: function(key){
            return sessionStorage.getItem(key);
         },
         set: function(key, val){
            return sessionStorage.setItem(key, val);
         },
         unset: function(){
            return sessionStorage.removeItem(key);
         }
      };
   });

});