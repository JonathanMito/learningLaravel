<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Form'], function (){
	Route::get('/usuarios', 'TestController@listAllUsers')->name('users.listAll');

	Route::get('/usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');

	Route::get('/usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');

	Route::get('/usuarios/{user}', 'TestController@listUser')->name('users.list');

	Route::post('usuarios/store', 'TestController@storeUser')->name('user.store');

	Route::put('usuarios/edit/{user}', 'TestController@edit')->name('user.edit');

	Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});

?>
