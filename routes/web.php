<?php

Route::pattern('id', '([0-9])*');
Route::pattern('cid', '([0-9])*');
Route::pattern('slug', '(.*)');

// ROUTE FOR CHOTEL
Route::namespace('Chotel')->group(function(){

	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'chotel.index.index'
	]);

	Route::get('/các-phòng/', [
		'uses' => 'RoomController@index',
		'as' => 'chotel.room.index'
	]);

	Route::get('/các-phòng/{slug}-{cid}', [
		'uses' => 'RoomController@cat',
		'as' => 'chotel.room.cat'
	]);

	Route::get('/{slug}-{id}.html', [
		'uses' => 'RoomController@detail',
		'as' => 'chotel.room.detail'
	]);

	Route::get('/đặt-phòng-{id}', [
		'uses' => 'RoomController@getBook',
		'as' => 'chotel.room.book'
	]);

	Route::post('/đặt-phòng-{id}', [
		'uses' => 'RoomController@postBook',
		'as' => 'chotel.room.book'
	]);

	Route::get('/giới-thiệu', [
		'uses' => 'AboutController@index',
		'as' => 'chotel.about.index'
	]);

	Route::get('/liên-hệ', [
		'uses' => 'ContactController@getIndex',
		'as' => 'chotel.contact.index'
	]);

	Route::post('/liên-hệ', [
		'uses' => 'ContactController@postAdd',
		'as' => 'chotel.contact.add'
	]);

});

// ROUTE FOR LOGIN
Route::group(['namespace' => 'Auth'], function(){
	Route::get('/login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);

	Route::post('/login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);

	Route::get('/logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.auth.logout'
	]);
});

// ROUTE FOR ADMIN
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'admin.index.index'
	]);

	//ROUTE FOR ROOM_TYPE
	Route::group(['prefix' => 'roomType'], function(){
		Route::get('/', [
			'uses' => 'RoomTypeController@index',
			'as' => 'admin.roomType.index'
		]);

		Route::get('/add', [
			'uses' => 'RoomTypeController@getAdd',
			'as' => 'admin.roomType.add'
		])->middleware('role:admin|ocean_6496,roomType');

		Route::post('/add', [
			'uses' => 'RoomTypeController@postAdd',
			'as' => 'admin.roomType.add'
		])->middleware('role:admin,roomType');

		Route::get('/edit/{id}', [
			'uses' => 'RoomTypeController@getEdit',
			'as' => 'admin.roomType.edit'
		]);

		Route::post('/edit/{id}', [
			'uses' => 'RoomTypeController@postEdit',
			'as' => 'admin.roomType.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'RoomTypeController@delete',
			'as' => 'admin.roomType.delete'
		])->middleware('role:admin,roomType');
	});
	

	//ROUTE FOR ROOM
	Route::group(['prefix' => 'room'], function(){
		Route::get('/', [
			'uses' => 'RoomController@index',
			'as' => 'admin.room.index'
		]);

		Route::get('/add', [
			'uses' => 'RoomController@getAdd',
			'as' => 'admin.room.add'
		])->middleware('role:admin,room');

		Route::post('/add', [
			'uses' => 'RoomController@postAdd',
			'as' => 'admin.room.add'
		])->middleware('role:admin,room');

		Route::get('/edit/{id}', [
			'uses' => 'RoomController@getEdit',
			'as' => 'admin.room.edit'
		]);

		Route::post('/edit/{id}', [
			'uses' => 'RoomController@postEdit',
			'as' => 'admin.room.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'RoomController@delete',
			'as' => 'admin.room.delete'
		])->middleware('role:admin,room');
	});

	//ROUTE FOR USER
	Route::group(['prefix' => 'user'], function(){
		Route::get('/', [
			'uses' => 'UserController@index',
			'as' => 'admin.user.index'
		]);

		Route::get('/add', [
			'uses' => 'UserController@getAdd',
			'as' => 'admin.user.add'
		])->middleware('role:admin,user');

		Route::post('/add', [
			'uses' => 'UserController@postAdd',
			'as' => 'admin.user.add'
		])->middleware('role:admin,user');

		Route::get('/edit/{id}', [
			'uses' => 'UserController@getEdit',
			'as' => 'admin.user.edit'
		]);

		Route::post('/edit/{id}', [
			'uses' => 'UserController@postEdit',
			'as' => 'admin.user.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'UserController@delete',
			'as' => 'admin.user.delete'
		])->middleware('role:admin,user');
	});


	//ROUTE FOR CUSTOMER
	Route::group(['prefix' => 'customer'], function(){
		Route::get('/', [
			'uses' => 'CustomerController@index',
			'as' => 'admin.customer.index'
		]);
		Route::get('/add', [
			'uses' => 'CustomerController@getAdd',
			'as' => 'admin.customer.add'
		]);
		Route::post('/add', [
			'uses' => 'CustomerController@postAdd',
			'as' => 'admin.customer.add'
		]);
		Route::get('/edit/{id}', [
			'uses' => 'CustomerController@getEdit',
			'as' => 'admin.customer.edit'
		]);
		Route::post('/edit/{id}', [
			'uses' => 'CustomerController@postEdit',
			'as' => 'admin.customer.edit'
		]);
		Route::get('/delete/{id}', [
			'uses' => 'CustomerController@delete',
			'as' => 'admin.customer.delete'
		]);
	});


	//ROUTE FOR UTILITY
	Route::group(['prefix' => 'utility'], function(){
		Route::get('/', [
			'uses' => 'UtilityController@index',
			'as' => 'admin.utility.index'
		]);

		Route::get('/add', [
			'uses' => 'UtilityController@getAdd',
			'as' => 'admin.utility.add'
		])->middleware('role:admin,utility');

		Route::post('/add', [
			'uses' => 'UtilityController@postAdd',
			'as' => 'admin.utility.add'
		])->middleware('role:admin,utility');

		Route::get('/edit/{id}', [
			'uses' => 'UtilityController@getEdit',
			'as' => 'admin.utility.edit'
		]);

		Route::post('/edit/{id}', [
			'uses' => 'UtilityController@postEdit',
			'as' => 'admin.utility.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'UtilityController@delete',
			'as' => 'admin.utility.delete'
		])->middleware('role:admin,utility');
	});


	//ROUTE FOR CONTACT
	Route::group(['prefix' => 'contact'], function(){
		Route::get('/', [
			'uses' => 'ContactController@index',
			'as' => 'admin.contact.index'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'ContactController@delete',
			'as' => 'admin.contact.delete'
		])->middleware('role:admin,contact');
	});



	//ROUTE FOR ABOUT
	Route::group(['prefix' => 'about'], function(){
		Route::get('/', [
			'uses' => 'AboutController@index',
			'as' => 'admin.about.index'
		]);

		Route::get('/add', [
			'uses' => 'AboutController@getAdd',
			'as' => 'admin.about.add'
		]);

		Route::post('/add', [
			'uses' => 'AboutController@postAdd',
			'as' => 'admin.about.add'
		]);

		Route::get('/edit/{id}', [
			'uses' => 'AboutController@getEdit',
			'as' => 'admin.about.edit'
		]);

		Route::post('/edit/{id}', [
			'uses' => 'AboutController@postEdit',
			'as' => 'admin.about.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'AboutController@delete',
			'as' => 'admin.about.delete'
		])->middleware('role:admin,about');
	});

});

