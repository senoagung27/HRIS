<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StokFFController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\StokJubelioController;

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
    return view('welcome');
    // Route::get('login', 'LoginController@showLoginForm');
    // Route::post('login', 'LoginController@login');
});
// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {
//     /**
//      * Home Routes
//      */
//     Route::get('/', 'HomeController@index')->name('home.index');


//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'RegisterController@show')->name('register.show');
//         Route::post('/register', 'RegisterController@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'LoginController@show')->name('login.show');
//         Route::post('/login', 'LoginController@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth', 'permission']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

//         /**
//          * User Routes
//          */


//         Route::group(['prefix' => 'users'], function() {
//             Route::get('/', 'UsersController@index')->name('users.index');
//             Route::get('/create', 'UsersController@create')->name('users.create');
//             Route::post('/create', 'UsersController@store')->name('users.store');
//             Route::get('/{user}/show', 'UsersController@show')->name('users.show');
//             Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
//             Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
//             Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
//         });

//         /**
//          * User Routes
//          */
//         Route::group(['prefix' => 'posts'], function() {
//             Route::get('/', 'PostsController@index')->name('posts.index');
//             Route::get('/create', 'PostsController@create')->name('posts.create');
//             Route::post('/create', 'PostsController@store')->name('posts.store');
//             Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
//             Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
//             Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
//             Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
//         });

//         Route::resource('roles', RolesController::class);
//         Route::resource('permissions', PermissionsController::class);
//     });
// });

Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::get('/dashboard', [ DashboardController::class, "index" ])->name('dashboard');
    // Route::get('/store-json', [ DashboardController::class, "getstok" ])->name('dashboard');
    // Route::get('/getwarehouse', [ DashboardController::class, "getwarehouse" ])->name('dashboard');

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', [ UserController::class, 'index'])->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::post('/create', 'UsersController@store')->name('users.store');
        Route::get('/{user}/show', 'UsersController@show')->name('users.show');
        Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
        Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });

    /**
     * User Routes
     */
    Route::group(['prefix' => 'posts'], function() {
        Route::get('/', [ PostsController::class, 'index'])->name('posts.index');
        Route::get('/create', 'PostsController@create')->name('posts.create');
        Route::post('/create', 'PostsController@store')->name('posts.store');
        Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
        Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
        Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
        Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
    });

    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    // Route::get('/StokJubelio', [ StokJubelioController::class, "index" ])->name('stokjubelio');
    // Route::get('/StokFF', [ StokFFController::class, "index" ])->name('stokff');
    // Route::get('/storeff', [ StokFFController::class, "store" ]);

    // Route::get('/user', [ UserController::class, "index" ])->name('user');
    // Route::view('/user/new', "pages.user.user-new")->name('user.new');
    // Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
