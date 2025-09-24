<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\FrontPageController::class,'index'])->name('index');
Route::get('/contact', [\App\Http\Controllers\FrontPageController::class,'contact'])->name('contact');
Route::get('/error', [\App\Http\Controllers\FrontPageController::class,'error'])->name('error');
Route::get('/portfolio', [\App\Http\Controllers\FrontPageController::class,'portfolio'])->name('portfolio');
Route::get('/pricing', [\App\Http\Controllers\FrontPageController::class,'pricing'])->name('pricing');
Route::get('/about', [\App\Http\Controllers\FrontPageController::class,'about'])->name('about');
Route::get('/services', [\App\Http\Controllers\FrontPageController::class,'service'])->name('service');

Route::get('/web-development', [\App\Http\Controllers\FrontPageController::class,'webDevelopment'])->name('services');
Route::get('/api-development', [\App\Http\Controllers\FrontPageController::class,'servicesApi'])->name('services.api');
Route::get('/support-maintenance', [\App\Http\Controllers\FrontPageController::class,'support'])->name('support.maintenance');
Route::get('/mobile-app-development', [\App\Http\Controllers\FrontPageController::class,'app'])->name('app.development');
Route::get('/pos', [\App\Http\Controllers\FrontPageController::class,'pos'])->name('pos');
Route::get('/crm', [\App\Http\Controllers\FrontPageController::class,'crm'])->name('crm');


Route::get('/carrer', [\App\Http\Controllers\FrontPageController::class,'carrer'])->name('carrer');
Route::get('/apply-jpb', [\App\Http\Controllers\FrontPageController::class,'applyJob'])->name('apply.job');
Route::get('/team', [\App\Http\Controllers\FrontPageController::class,'team'])->name('team');
Route::get('/sign-in', [\App\Http\Controllers\FrontPageController::class,'signin'])->name('signin');



Route::post('/project-mail', [\App\Http\Controllers\MailController::class,'projectMail'])->name('project.mail');
Route::post('/contact-mail', [\App\Http\Controllers\MailController::class,'contactMail'])->name('contact.mail');
Route::post('/apply-job', [\App\Http\Controllers\MailController::class,'applyJob'])->name('applyjob.mail');
