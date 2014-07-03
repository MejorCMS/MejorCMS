<!doctype html>
<html lang="es" ng-app="app">
<head>
  <meta charset="UTF-8"/>
  <title>Administrador | MejorCMS</title>
  {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.css') }}
  {{ HTML::script('bower_components/requirejs/require.js', ['data-main'=>'app/main']) }}
</head>
<body>
<h1>Administrador</h1>
<div class="container">
  <div ng-view></div>
</div>
</body>
</html>
