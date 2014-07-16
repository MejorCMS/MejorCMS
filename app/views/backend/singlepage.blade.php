<!doctype html>
<html lang="es" ng-app="app">
<head>
  <meta charset="UTF-8"/>
  <title>Administrador | MejorCMS</title>
  {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.css') }}
  {{ HTML::script('bower_components/requirejs/require.js', ['data-main'=>'app/main']) }}
  {{ HTML::script('underscore.js') }}

</head>
<body>
 <div class="navbar navbar-inverse" role="navigation">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">MejorCMS</a>
     </div>
     <div class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li class="active"><a href="#/home">Home</a></li>
         <li><a href="#post">Posts</a></li>
         <li><a href="#contact">Contact</a></li>
         <li><a href="#/categories">Categories</a></li>
       </ul>
     </div><!--/.nav-collapse -->
   </div>
</div>
<div class="container">
<div class="row">
   <h1>Administrador</h1>
   <div class="alert alert-danger" ng-show="flash">
      @{{ flash }}
   </div>
</div>
     <div ng-view></div>
</div>
{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
</body>
</html>
