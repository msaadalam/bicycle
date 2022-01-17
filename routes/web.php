<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

 Route::get('/admin', function () {
    return view('welcome');
});
    
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/iterative', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/iterative', 'App\Http\Controllers\Admin\DashboardController@iterative')->name('iterative');
Route::get('/admin/events', 'App\Http\Controllers\Admin\DashboardController@events')->name('events');
Route::get('/admin/hotels', 'App\Http\Controllers\Admin\DashboardController@hotels')->name('hotels');
Route::get('/admin/faqs', 'App\Http\Controllers\Admin\DashboardController@faqs')->name('faqs');
Route::post('/admin/faqs/createcategory', 'App\Http\Controllers\bicycle\FaqController@createfaqscategory')->name('createfaqscategory');
Route::post('/admin/faqs/create', 'App\Http\Controllers\bicycle\FaqController@createfaqs')->name('createfaqs');
Route::get('/admin/faqs/list', 'App\Http\Controllers\bicycle\FaqController@listfaqs')->name('createlist');
Route::get('/admin/faqs/show/{id}', 'App\Http\Controllers\bicycle\FaqController@show')->name('faqsshow');
Route::get('/admin/faqs/edit/{id}', 'App\Http\Controllers\bicycle\FaqController@edit')->name('faqsedit');
Route::post('/admin/faqs/update/{id}', 'App\Http\Controllers\bicycle\FaqController@update')->name('updatefaqs');
Route::get('/admin/faqs/delete/{id}', 'App\Http\Controllers\bicycle\FaqController@destroy')->name('faqsdestroy');
Route::get('/admin/contact_us_list', 'App\Http\Controllers\Admin\ContactusController@contact_us_list')->name('listcontactus');
Route::get('/admin/contact_us_list/show/{id}', 'App\Http\Controllers\Admin\ContactusController@show')->name('showcontactus');
Route::get('/admin/request_qoute_list', 'App\Http\Controllers\Admin\RequestQouteController@request_qoute_list')->name('request_qoute_list');
Route::get('/admin/request_qoute_list/show/{id}', 'App\Http\Controllers\Admin\RequestQouteController@show')->name('showrequestqoute');


Route::get('frontend/faqs', 'App\Http\Controllers\bicycle\FaqController@index');
Route::get('frontend/request-a-qoute', 'App\Http\Controllers\bicycle\indexController@request_a_qoute');
Route::post('frontend/submit_request-a-qoute', 'App\Http\Controllers\bicycle\RequestQouteController@submit_request_qoute')->name('submit_request');
Route::get('frontend/contact-us', 'App\Http\Controllers\bicycle\ContactusController@contact_us');
Route::post('frontend/submit_contact_us', 'App\Http\Controllers\bicycle\ContactusController@submit_contact_us')->name('submit_contact_us');

require __DIR__.'/auth.php';
