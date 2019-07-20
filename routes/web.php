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

Route::group(['midlleware' => 'web'], function() {

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    */

    // php artisan make:auth
    Auth::routes();

    /*
    |--------------------------------------------------------------------------
    | Index
    |--------------------------------------------------------------------------
    */

    // Jika tidak login, masuk ke halaman login
    // Jika sudah login, masuk ke dashboard member/admin
    Route::get('/', 'HomeController@index');

    /*
    |--------------------------------------------------------------------------
    | Home
    |--------------------------------------------------------------------------
    */

    // Gak penting, cuma untuk pengaling ke dashboard
    Route::get('/home', 'HomeController@index')->name('home');

    /*
    |--------------------------------------------------------------------------
    | Profile, Edit Profile, Update Profile,
    |--------------------------------------------------------------------------
    */

    // Profile
    Route::get('setting/profile', 'SettingController@profile');

    // Edit Profile
    Route::get('setting/profile/edit', 'SettingController@editProfile');

    // Update Profile
    Route::post('setting/profile', 'SettingController@updateProfile');

    // Edit Password
    Route::get('setting/password', 'SettingController@editPassword');

    // Ubah Password
    Route::post('setting/password', 'SettingController@updatePassword');

    /*
    |--------------------------------------------------------------------------
    | History Pencairan, History Setoran
    |--------------------------------------------------------------------------
    */

    // History Pencairan
    Route::get('history/pencairan', 'HistoryController@pencairan');

    // History Setoran
    Route::get('history/setoran', 'HistoryController@setoran');

    /*
    |--------------------------------------------------------------------------
    | Request Pencairan Dana
    |--------------------------------------------------------------------------
    */

    // Request Pencairan Dana
    Route::get('request/pencairan', 'RequestController@pencairan');

    /*
    |--------------------------------------------------------------------------
    | List User
    |--------------------------------------------------------------------------
    */

    // List User
    Route::get('user', 'UserController@index');

    /*
    |--------------------------------------------------------------------------
    | Proses Pencairan
    |--------------------------------------------------------------------------
    */

    // Proses Pencairan
    Route::get('proses/pencairan', 'ProsesController@index');

    /*
    |--------------------------------------------------------------------------
    | Laporan
    |--------------------------------------------------------------------------
    */

    // Laporan
    Route::get('laporan', 'LaporanController@index');

    /*
    |--------------------------------------------------------------------------
    | Pemantauan Pos
    |--------------------------------------------------------------------------
    */

    // Pemantauan Pos
    Route::get('pos', 'PosController@index');

    /*
    |--------------------------------------------------------------------------
    | Daily Reward
    |--------------------------------------------------------------------------
    */

    // Daily Reward
    Route::get('daily-reward', 'DailyRewardController@index');

    /*
    |--------------------------------------------------------------------------
    | Ambil Sampah
    |--------------------------------------------------------------------------
    */

    // Ambil Sampah
    Route::get('ambil-sampah', 'AmbilSampahController@index');
});
