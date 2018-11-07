var app = angular.module('koriapp',['ngRoute']);

//Agregando Rutas

app.config(['$routeProvider', function ($routeProvider){

$routeProvider

.when('/',{

templateUrl: 'rutas/home.html',

})

.when('/matricula',{

templateUrl: 'rutas/matricula.html',

})

.otherwise({
  redirectTo:'/'
})

}]);
