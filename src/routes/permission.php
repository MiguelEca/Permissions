<?php 


	Route::group(['prefix' => 'permission'],function ()
	{
		Route::get('getdata','ControllerPermission@getDataPermissions');
		Route::post('create','ControllerPermission@saveDataPermission');
		Route::put('update/{permission}','ControllerPermission@updateDataPermission');
		Route::delete('delete/{permission}','ControllerPermission@deleteDataPermission');
	});
	Route::get('hola',function ()
	{
		return 'hola desde el paquete permissions';
	});


 ?>