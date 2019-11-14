<?php

use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('home', 'HomeController');

Route::get('main', 'HomeController@main');

Route::resource('group', 'GroupController');

Route::resource('offer', 'OfferController');

Route::get('profile/{user}','ProfileController@show')->name('userProfile');

Route::resource('profile', 'ProfileController');

Route::patch('group{group}/addUser{user}','GroupController@addUser')->name('group.addUser');

Route::get('group{group}/addUser','GroupController@findUser')->name('group.findUser');

Route::get('group{group}/deleteUser{user}','GroupController@deleteUser')->name('group.deleteUser');

Route::patch('user{user}/addToGroup','ProfileController@addToGroup')->name('user.addToGroup');

Route::get('user{user}/addToGroup','ProfileController@findGroup')->name('user.findGroup');

Route::delete('user{user}/detachGroup', 'ProfileController@detachGroup')->name('user.detachGroup');

Route::get('user{user}/kick', 'ProfileController@kickFromGroup');

Route::resource('answer', 'AnswerController')->except(['index','show']);

Route::resource('comment', 'CommentController')->except(['index','show']);

Route::resource('club', 'ClubController');

Route::resource('game','GameController');

Route::get('gameGroupOffers/{game}', 'GameController@gameGroupOffers')->name('gameGroupOffers');

Route::get('gameUserOffers/{game}', 'GameController@gameUserOffers')->name('gameUserOffers');