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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainAdminController::class, 'index'])->name('dashboard');


    Route::group(['prefix' => 'main'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\MainAdminController::class, 'main'])->name('main');
        Route::post('/store', [\App\Http\Controllers\Admin\MainAdminController::class, 'store'])->name('main.store');
    });

    Route::group(['prefix' => 'reviews'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewsController::class, 'index'])->name('reviews');
        Route::post('/store', [\App\Http\Controllers\Admin\ReviewsController::class, 'store'])->name('reviews.store');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\ReviewsController::class, 'update'])->name('reviews.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ReviewsController::class, 'delete'])->name('reviews.delete');
    });



    Route::group(['prefix' => 'portfolio'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\PortfolioController::class, 'index'])->name('portfolio.index');
        Route::post('/store', [\App\Http\Controllers\Admin\PortfolioController::class, 'store'])->name('portfolio.store');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\PortfolioController::class, 'delete'])->name('portfolio.delete');
    });


    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ContactUsController::class, 'index'])->name('contactus');
        Route::post('/store', [\App\Http\Controllers\Admin\ContactUsController::class, 'store'])->name('contactus.store');
    });


    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin.about');
        Route::post('/store', [\App\Http\Controllers\Admin\AboutController::class, 'store'])->name('about.store');
    });


    Route::group(['prefix' => 'carrer'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\CarrerController::class, 'index'])->name('admin.carrer');
        Route::post('/store', [\App\Http\Controllers\Admin\CarrerController::class, 'store'])->name('carrer.store');
    });


    Route::group(['prefix' => 'team'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\TeamController::class, 'index'])->name('admin.team');
        Route::post('/store', [\App\Http\Controllers\Admin\TeamController::class, 'store'])->name('team.store');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'update'])->name('team.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'delete'])->name('team.delete');
    });


    Route::group(['prefix' => 'job'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\JobController::class, 'index'])->name('admin.job');
        Route::post('/store', [\App\Http\Controllers\Admin\JobController::class, 'store'])->name('job.store');
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\JobController::class, 'update'])->name('job.update');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\JobController::class, 'delete'])->name('job.delete');
    });

});





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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
