<?php

Route::get('/', function () {
    return view('inicio');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function ()
    {
        return view('user.inicio');

    });

});

Route::resource('log','LogController');

Route::resource('Store','UsersController');

Route::group(['prefix' => 'Public'],function(){

    Route::get('/',[
        'uses' 	=> 'PublicController@index',
        'as'	=> 'Public.index'
    ]);

    Route::get('/mostrarT',[
        'uses' 	=> 'PublicController@mostrarT',
        'as'	=> 'Public.mostrarT'
    ]);

});

Route::group(['prefix' => 'Libro'],function (){

    Route::get('/inicioB',[
        'uses' 	=> 'BookController@inicioB',
        'as'	=> 'Book.inicioB'
    ]);
    Route::get('/crear',[
        'uses' 	=> 'BookController@crear',
        'as'	=> 'Book.crear'
    ]);

    Route::get('/mostrarB',[
        'uses' 	=> 'BookController@mostrarB',
        'as'	=> 'Book.mostrarB'
    ]);


    Route::get('/libro/{id}',[
        'uses' 	=> 'BookController@libro',
        'as'	=> 'Book.libro'
    ]);

    Route::delete('/deleteBook/{id}',[
        'uses' 	=> 'BookController@deleteBook',
        'as'	=> 'Book.deleteBook'
    ]);

    Route::get('/exportBook/{id}',[
        'uses' 	=> 'ExportController@book',
        'as'	=> 'Book.exportBook'
    ]);

});

Route::group(['prefix' => 'Contenido'],function (){

    Route::get('/inicioC',[
        'uses' 	=> 'ContentController@inicioC',
        'as'	=> 'Contenido.inicioC'
    ]);

    Route::get('/creador',[
        'uses' 	=> 'ContentController@creador',
        'as'	=> 'Contenido.creador'
    ]);

    Route::get('/editor',[
        'uses' 	=> 'ContentController@editor',
        'as'	=> 'Contenido.editor'
    ]);
    //Muestra todos los contenidos
    Route::get('/mostrarC',[
        'uses' 	=> 'ContentController@mostrarC',
        'as'	=> 'Contenido.mostrarC'
    ]);
    //Muestra un solo contenido creado
    Route::get('/contenido/{id}',[
        'uses' 	=> 'ContentController@contenido',
        'as'	=> 'Contenido.contenido'
    ]);

    Route::delete('/deleteContent/{id}',[
        'uses' 	=> 'ContentController@deleteContent',
        'as'	=> 'Contenido.deleteContent'
    ]);

    Route::get('/exportContent/{id}',[
        'uses' 	=> 'ExportController@contenido',
        'as'	=> 'Contenido.exportContent'
    ]);

    Route::get('/editContenido/{id}',[
        'uses' 	=> 'ContentController@editContenido',
        'as'	=> 'Contenido.editContenido'
    ]);

    Route::post('/update.contenido/{id}', [
        'uses' => 'UpdateController@contenido',
        'as'	=> 'Update.contenido'
    ]);

});

Route::group(['prefix' => 'Cuestionario'],function (){

    Route::get('/inicioQ',[
        'uses' 	=> 'QuestionController@inicioQ',
        'as'	=> 'Question.inicioQ'
    ]);
    Route::get('/crear',[
        'uses' 	=> 'QuestionController@crear',
        'as'	=> 'Question.crear'
    ]);
    Route::get('/mostrarQ',[
        'uses' 	=> 'QuestionController@mostrarQ',
        'as'	=> 'Question.mostrarQ'
    ]);

    Route::get('/cuestionario/{id}',[
        'uses' 	=> 'QuestionController@cuestionario',
        'as'	=> 'Question.cuestionario'
    ]);


    Route::delete('/deleteQuest/{id}',[
        'uses' 	=> 'QuestionController@deleteQuest',
        'as'	=> 'Question.deleteQuest'
    ]);

    Route::get('/exportQuest/{id}',[
        'uses' 	=> 'ExportController@questionario',
        'as'	=> 'Question.exportQuest'
    ]);


});

Route::post('/store.libro', [
        'uses' => 'StoreController@libro',
        'as'	=> 'Store.libro'
    ]);

Route::post('/store.contenido', [
        'uses' => 'StoreController@contenido',
        'as'	=> 'Store.contenido'
    ]);

Route::post('/store.pregunta', [
        'uses' => 'StoreController@pregunta',
        'as'	=> 'Store.pregunta'
    ]);

Route::get('/logout', [
        'uses' => 'UsersController@logout',
        'as'	=> 'logout'
    ]);

Route::get('/flogin', [
    'uses' => 'UsersController@flogin',
    'as'	=> 'flogin'
]);

Route::get('/fregistry', [
    'uses' => 'UsersController@fregistry',
    'as'	=> 'fregistry'
]);

// Rutas necesarias para el traspaso de usuarios

  Route::group(['prefix' => 'raim', 'middleware' => 'api'],function(){

    Route::post('/session_create',[
      'uses' 	=> 'raimController@session_create',
      'as'	=> 'raim.session_create'
    ]);

    Route::post('/session_update',[
      'uses' 	=> 'raimController@session_update',
      'as'	=> 'raim.session_update'
    ]);

    Route::post('/session_delete',[
      'uses' 	=> 'raimController@session_delete',
      'as'	=> 'raim.session_delete'
    ]);

  });

//Rutas de mao sama

Route::group(['middleware' => ['web','auth','administrador'],'prefix' => 'Admin'],function(){

    Route::get('/', function ()
    {

        //return view('user.login');
    });

    Route::resource('Rol','RolController');
    Route::get('Rol/{id}/delete',[
        'uses' 	=> 'RolController@delete',
        'as'	=> 'Admin.Rol.delete'
    ]);

    Route::resource('User','UserController');
    Route::get('User/{id}/delete',[
        'uses' 	=> 'UserController@delete',
        'as'	=> 'Admin.User.delete'
    ]);

    Route::get('User',[
        'uses' 	=> 'UserController@index',
        'as'	=> 'Admin.User.index'
    ]);

    Route::resource('Aplication','AplicationController');
    Route::get('Aplication/{id}/delete',[
        'uses' 	=> 'AplicationController@delete',
        'as'	=> 'Admin.Aplication.delete'
    ]);

    Route::resource('Table','TableController');
    Route::get('Table/{id}/delete',[
        'uses' 	=> 'TableController@delete',
        'as'	=> 'Admin.Table.delete'
    ]);

    Route::get('Table/index',[
        'uses' 	=> 'TableController@index',
        'as'	=> 'Admin.Table.index'
    ]);

    Route::resource('Option','OptionController');
    Route::get('Option/{id}/delete',[
        'uses' 	=> 'OptionController@delete',
        'as'	=> 'Admin.Option.delete'
    ]);

    Route::resource('TypeField','TypeFieldController');
    Route::get('TypeField/{id}/delete',[
        'uses' 	=> 'TypeFieldController@delete',
        'as'	=> 'Admin.TypeField.delete'
    ]);

    Route::resource('FieldTable','FieldTableController');
    Route::get('FieldTable/{id}/delete',[
        'uses' 	=> 'FieldTableController@delete',
        'as'	=> 'Admin.FieldTable.delete'
    ]);
    Route::resource('FieldUser','FieldUserController');
    Route::get('FieldUser/{id}/delete',[
        'uses' 	=> 'FieldUserController@delete',
        'as'	=> 'Admin.FieldUser.delete'
    ]);
    Route::get('FieldUser/{id}/EditApps',[
        'uses' 	=> 'FieldUserController@editApps',
        'as'	=> 'Admin.FieldUser.EditApps'
    ]);
    Route::POST('FieldUser/updateAll',[
        'uses' 	=> 'FieldUserController@updateAll',
        'as'	=> 'Admin.FieldUser.UpdateAll'
    ]);
    Route::POST('FieldUser/data',[
        'uses' 	=> 'FieldUserController@data',
        'as'	=> 'Admin.FieldUser.data'
    ]);

});

Route::group(['middleware' => ['web','auth','creador'],'prefix' => 'Creador'],function(){

    Route::get('/',[
        'uses' 	=> 'CreadorController@index',
        'as'	=> 'Creador.index'
    ]);
    Route::get('/{id_user}',[
        'uses' 	=> 'CreadorController@show',
        'as'	=> 'Creador.show'
    ]);
    Route::get('/{FieldUser}/edit',[
        'uses' 	=> 'CreadorController@edit',
        'as'	=> 'Creador.edit'
    ]);
    Route::put('/{user}',[
        'uses' 	=> 'CreadorController@update',
        'as'	=> 'Creador.update'
    ]);
    Route::get('/{id}/EditApps',[
        'uses' 	=> 'CreadorController@editApps',
        'as'	=> 'Creador.EditApps'
    ]);
    Route::POST('/updateAll',[
        'uses' 	=> 'CreadorController@updateAll',
        'as'	=> 'Creador.UpdateAll'
    ]);
    //Route::patch($uri, $callback);
    //Route::delete($uri, $callback);


});

Route::group(['middleware' => ['web','auth','estudiante'],'prefix' => 'Estudiante' ],function(){

    Route::get('/listAplications',[
        'uses' 	=> 'EstudianteController@IndexAplication',
        'as'	=> 'Estudiante.listAplications'
    ]);

    Route::get('/{id_user}',[
        'uses' 	=> 'EstudianteController@show',
        'as'	=> 'Estudiante.show'
    ]);

    Route::get('/',[
        'uses' 	=> 'EstudianteController@index',
        'as'	=> 'Estudiante.index'
    ]);

    Route::get('/{FieldUser}/edit',[
        'uses' 	=> 'EstudianteController@edit',
        'as'	=> 'Estudiante.edit'
    ]);
    Route::put('/{user}',[
        'uses' 	=> 'EstudianteController@update',
        'as'	=> 'Estudiante.update'
    ]);
    Route::get('/{id}/EditApps',[
        'uses' 	=> 'EstudianteController@editApps',
        'as'	=> 'Estudiante.EditApps'
    ]);
    Route::POST('/updateAll',[
        'uses' 	=> 'EstudianteController@updateAll',
        'as'	=> 'Estudiante.UpdateAll'
    ]);




});

Route::group(['prefix' => 'Public'],function(){

    Route::get('/',[
        'uses' 	=> 'PublicController@index',
        'as'	=> 'Public.index'
    ]);

    Route::get('/objectives',[
        'uses' 	=> 'PublicController@objectives',
        'as'	=> 'Public.objectives'
    ]);

    Route::get('/advisers',[
        'uses' 	=> 'PublicController@advisers',
        'as'	=> 'Public.advisers'
    ]);

    Route::get('/reporting',[
        'uses' 	=> 'PublicController@reporting',
        'as'	=> 'Public.reporting'
    ]);

    Route::get('/publications',[
        'uses' 	=> 'PublicController@publications',
        'as'	=> 'Public.publications'
    ]);

    Route::get('/others',[
        'uses' 	=> 'PublicController@others',
        'as'	=> 'Public.others'
    ]);

    Route::get('/searchOa/{id_user?}',[
        'uses' 	=> 'PublicController@searchOa',
        'as'	=> 'Public.searchOa'
    ]);

    Route::get('/listAplications',[
        'uses' 	=> 'PublicController@IndexAplication',
        'as'	=> 'Public.listAplications'
    ]);

    Route::get('/Register',[
        'uses' 	=> 'PublicController@register',
        'as'	=> 'Public.Register'
    ]);
    Route::post('/store',[
        'uses' 	=> 'PublicController@store',
        'as'	=> 'Public.store'
    ]);
    Route::get('/create',[
        'uses' 	=> 'PublicController@create',
        'as'	=> 'Public.create'
    ]);
    Route::get('/{id_user}',[
        'uses' 	=> 'PublicController@show',
        'as'	=> 'Public.show'
    ]);
    Route::post('/storeAll',[
        'uses' 	=> 'PublicController@storeAll',
        'as'	=> 'Public.storeAll'
    ]);
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
