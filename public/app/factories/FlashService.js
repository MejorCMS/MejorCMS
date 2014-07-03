define(['modules/app'], function(app){

   app.factory('FlashService', function($rootScope){
     return {
       show: function(message){
         $rootScope.flash = message;
       },
       clear: function(){
         $rootScope.flash = "";
       }
     }
   });

});
