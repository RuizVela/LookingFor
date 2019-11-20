<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('home', 'HomeController');

Route::get('main', 'HomeController@main');

Route::resource('group', 'GroupController');

Route::resource('offer', 'OfferController');


Route::resource('profile', 'ProfileController');


Route::patch('group{group}/addUser','GroupController@addUser')->name('group.addUser');

Route::get('group{group}/addUser','GroupController@findUser')->name('group.findUser');

Route::get('group{group}/deleteUser{user}','GroupController@deleteUser')->name('group.deleteUser');

Route::patch('user{user}/addToGroup','ProfileController@addToGroup')->name('user.addToGroup');

Route::get('user{user}/addToGroup','ProfileController@findGroup')->name('user.findGroup');

Route::delete('user{user}/detachGroup', 'ProfileController@detachGroup')->name('user.detachGroup');

Route::get('user{user}/kick', 'ProfileController@kickFromGroup');

Route::resource('answer', 'AnswerController')->except(['index','show']);

Route::resource('comment', 'CommentController')->except(['index','show']);

Route::resource('club', 'ClubController');

Route::get('user{user}/addToClub','ProfileController@findClub')->name('user.findClub');

Route::patch('user{user}/addToClub','ProfileController@addToClub')->name('user.addToClub');

Route::resource('game','GameController');

Route::get('gameGroupOffers/{game}', 'GameController@gameGroupOffers')->name('gameGroupOffers');

Route::get('gameUserOffers/{game}', 'GameController@gameUserOffers')->name('gameUserOffers');

Route::get('gameGroups/{game}', 'GameController@gameGroups')->name('gameGroups');

Route::resource('club', 'ClubController');
Route::patch('club{club}/addUser','ClubController@addUser')->name('club.addUser');
Route::get('club{club}/addUser','ClubController@findUser')->name('club.findUser');
Route::get('club{club}/deleteUser{user}','ClubController@deleteUser')->name('club.deleteUser');
Route::get('club{club}/addGroup','ClubController@findGroup')->name('club.findGroup');
Route::patch('club{club}/addGroup', 'ClubController@addGroup')->name('club.addGroup');
    