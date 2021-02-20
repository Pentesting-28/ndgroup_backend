<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController; 

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



//Home
Route::get('/', 'PropertyController@inicio')->name('inicio');


Route::get('/test', 'PropertyController@test')->name('test');

Route::get('/Submit-listing', 'PropertyController@list_show')->name('list_show');
Route::get('/Submit-listing/search', 'PropertyController@search')->name('search');
Route::get('/Submit-listing/crear', 'PropertyController@crear')->name('crear');
Route::get('/Submit-listing/{id}/editar', 'PropertyController@editar')->name('editar');
Route::post('/Submit-listing/crear', 'PropertyController@store')->name('store');
Route::put('/Submit-listing/{id}', 'PropertyController@update')->name('update');
Route::delete('/Submit-listing/{id}', 'PropertyController@delete')->name('delete');
Route::get('/Submit-listing/{id}', 'PropertyController@details')->name('details');

Route::get('/Contacto', 'PropertyController@contact')->name('contact');
//Envio de correos
Route::post('/Sendmail', 'Mail\SendMailController@sendmail')->name('sendmail'); // se pone post ya que en el formulario lo tienes como post, al momento de tenerlo como get es como si fuera una vista y solo envia las variables por la url, post es mas seguro y se recomienda siempre en los formularios

Auth::routes();

// Login Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Logout Routes...
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Password Confirmation Routes...
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/clear', function() {
	$run = Artisan::call('config:clear');
	$run = Artisan::call('cache:clear');
	$run = Artisan::call('config:cache');
	return 'FINISHED';  
});