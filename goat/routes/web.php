<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/matches', function () {
    return view('matches');
});

Route::get('/tournaments', function () {
    return view('tournaments');
})->middleware('auth');

Route::get('/viewtournaments', function () {
    return view('viewtournaments');
})->middleware('auth');

Route::get('/team_news', function () {
    return view('team_news')->name('team_news');
});

Route::get('/tournamentpage', function () {
    return view('tournamentpage');
});

Route::get('/index', function () {
    return view('index')->name('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/team', function () {
    return view('team');
})->middleware('auth');

Route::get('/test', function () {
    return view('test');
});

Route::get('/news', function () {
    return view('news');
});


Route::get('/tournamentpage/{id}', 'TournamentController@show');
Route::get('/chatroom/{id}', 'TournamentController@chat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api', 'HomeController@api');



Route::get('/positions', 'PositionController@create')->name('allpositions');

// Route::get('/players','PlayerController@create')->name('allplayers');

Route::get('/store_players', 'PlayerController@add_player')->name('storeplayers');

Route::get('/store_teams', 'TeamController@add_team')->name('storeteams');

Route::post('/create_tournament', 'TournamentController@create')->name('createtournament');

Route::get('/view_tournaments', 'TournamentController@store')->name('viewtournaments');

Route::get('/store_position', 'PositionController@add_position')->name('storepositions');

Route::get('/getformation', 'FormationController@create')->name('formation');

Route::get('/tournaments_users/{id}', 'TournamentController@get');

Route::get('/all_tournaments', 'TournamentController@all');

Route::get('/match', 'MatchController@get_matches');

Route::get('/player_formation_delete/{id}', 'FormationController@destroy');

Route::post('/post_formation', 'FormationController@store');

Route::post('/join_tournament', 'UserTournamentController@store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pp', 'PlayerController@test');

// Route::get('/newsscource', 'ApiController@newsapi');
// Route::post('/source_id', 'ApiController@newsapi');

Route::get('/team_news/{name}', 'ApiController@newsapi');

Route::post('/source_id', 'ApiController@newsapi');
