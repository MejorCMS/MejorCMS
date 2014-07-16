define(['modules/app'], function(app){

   app.factory('CategoryResource', ['$resource', function($resource){

      var factory = {
         getCategories: $resource('admin/categories', {}, {
            all: { method: 'GET', isArray: true }
         }),
         addCategory: $resource('admin/categories/new', {} , {
            newCategory: { method: 'POST', params: { name: '@name',description: '@description', slug:'@slug' } }
         })
      };

      return factory;
   }]);

});