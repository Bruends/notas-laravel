<?php

//page routing
Route::get('/add', function(){
    return view('save');
});
Route::get('/{id}/update', 'NotesController@pageUpdate');
Route::get('/{id}/delete', 'NotesController@pageDelete');

// actions routing
Route::get('/', 'NotesController@index');
Route::get('/search', 'NotesController@search');
Route::post('/add', 'NotesController@save');
Route::post('/{id}/update', 'NotesController@update');
Route::post('/{id}/delete', 'NotesController@delete');
