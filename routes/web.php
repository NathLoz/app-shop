<?php


//Ejecuta una función que devuelve una vista llamada welcome
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/prueba', function()
{
	return 'Hola soy una ruta de prueba';
});

Route::get('/','TestController@welcome');

//Rutas de autenticación
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
