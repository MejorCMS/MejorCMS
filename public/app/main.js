require.config({
   baseUrl: 'app/',
   paths: {
      'angular': '../bower_components/angular/angular',
      'angular-route': '../bower_components/angular-route/angular-route',
      'angular-resource': '../bower_components/angular-resource/angular-resource',
      'angular-sanitize': '../bower_components/angular-sanitize/angular-sanitize'
   },
   shim: {
      'angular': { 'exports': 'angular' },
      'angular-route': { deps: ['angular'] },
      'angular-resource': { deps: ['angular'] },
      'angular-sanitize': { deps: ['angular'] }
   }
});

/**
 *  indicamos que inicie la aplicacion y
 *  el modulo que ocuparemos ("app")
 */
require(['angular', 'routes/routes', 'config/config', 'config/run'], function(angular, mainRoutes){
   return angular.bootstrap(document, ['app']);
});