<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::prefix('dashboard')->group(function () {

        //admin login
        Route::get('login', 'Auth\AuthController@login')->name('dashboard.login')->middleware('guest:admin');
        Route::post('authenticate', 'Auth\AuthController@authenticate')->name('authenticate');

        Route::middleware(['auth:admin'])->group(function () {
            Route::get('/', 'Auth\AuthController@home')->name('admin.home');
            Route::get('logout', 'Auth\AuthController@logout')->name('admin.logout');


            //role routes
            Route::resource('roles', 'RoleController');

            //admin users routes
            Route::resource('admin-users', 'AdminUserController');
            Route::get('my-profile', 'AdminUserController@profile')->name('admin.profile');
            Route::put('my-profile/{id}/update', 'AdminUserController@updateProfile')->name('admin.profile.update');

            //projects routes
//            Route::resource('projects', 'ProjectController');

            //slider routes
            Route::resource('sliders', 'SliderController');
             //newsection routes
             Route::resource('newsections', 'NewSectionController');

            //features routes
            Route::resource('features', 'FeatureController');

            //Counters routes
            Route::resource('counters', 'CounterController');
            //clients routes
            Route::resource('clients', 'ClientController');

            //category routes
            Route::resource('categories', 'CategoryController');

            //product routes
            Route::resource('products', 'ProductController');

            //product routes
            Route::resource('services', 'ServiceController');

            //product routes
            Route::resource('projects', 'ProjectController');

            //teams routes
            Route::resource('teams', 'TeamController');

            //testimonials routes
            Route::resource('testimonials', 'TestimonialController');

            //partners routes
            Route::resource('partners', 'PartnerController');

            //portfolios routes
            Route::resource('portfolios', 'PortfolioController');

            //blog routes
            Route::resource('blog', 'BlogController');

            //FAQ routes
            Route::resource('faqs', 'FaqController');

            //pages routes
            Route::resource('pages', 'PageController');

            //contact routes
            Route::resource('contacts', 'SettingContactController');

            //news-letter routes
            Route::resource('news-letters', 'NewsLetterController');
            Route::get('subscribed-users', 'NewsLetterController@subscribedUsers')->name('news-letters.subscribed');
            Route::post('subscribed-users/delete/{id}', 'NewsLetterController@deleteSubscribedUsers')->name('news-letters.delete_subscribed_users');

            //setting routes
            Route::resource('settings', 'SettingController');

            //contact_requests routes
            Route::resource('contact_requests', 'ContactRequestController');
            Route::get('contact_requests/{contact_request}/reply', 'ContactRequestController@reply')->name('contact_requests.reply');
            Route::post('contact_requests/{contact_request}/send_mail', 'ContactRequestController@send_mail')->name('contact_requests.send_mail');

            //course routes
            Route::get('courses', 'CourseController@index')->name('courses.index');
            Route::get('courses/{id}/show', 'CourseController@index')->name('courses.show');
            Route::get('courses/create', 'CourseController@create')->name('courses.create');
            Route::post('courses/import', 'CourseController@import')->name('courses.import');
            Route::get('courses/export', 'CourseController@export')->name('courses.export');
        });
    });
});

Route::get('unsubscribe/{id}', 'NewsLetterController@unsubscribe')->name('news-letters.unsubscribe');
Route::post('unsubscribe/action', 'NewsLetterController@unsubscribeAction')->name('news-letters.unsubscribe_action');
Route::get('unsubscribe/confirmation', function (){
    return view('admin.news_letters.unsubscribe_confirmation');
})->name('news-letters.unsubscribe_confirmation');
