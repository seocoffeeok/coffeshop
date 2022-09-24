<?php

use App\Http\Controllers\Client\About\AboutViewController;
use App\Http\Controllers\Client\Brand\BrandModelViewController;
use App\Http\Controllers\Client\Brand\BrandViewController;
use App\Http\Controllers\Client\ContactForm\ContactFormCreateController;
use App\Http\Controllers\Client\District\DistrictViewController;
use App\Http\Controllers\Client\Malfunction\MalfunctionViewController;
use App\Http\Controllers\Client\Page\PageViewController;
use App\Http\Controllers\Client\Repair\RepairViewController;
use App\Http\Controllers\Client\Review\ReviewCreateController;
use App\Http\Controllers\Client\Service\ServiceViewController;
use App\Http\Controllers\Client\Staff\StaffListController;
use App\Http\Controllers\Client\Staff\StaffViewController;
use App\Http\Controllers\Client\Type\TypeViewController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::redirect('/repair', '/');
Route::redirect('/tip', '/');
Route::redirect('/service', '/');

//Route::view('/article', 'client.article.view')->name('article');
//Route::view('/blog', 'client.blog.view')->name('blog');

Route::view('/status', 'client.status.view')->name('status');
Route::view('/status-remonta', '')->name('repair-status');


/* New */

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
], function (): void {
    Route::view('', 'client.home.view')->name('home');

    Route::view('/faq', 'client.faq.view')->name('faq');

    Route::get('/staff', StaffListController::class)->name('staff.list');
    Route::get('/staff/{slug}', StaffViewController::class)
        ->name('staff.view');

    Route::view('/districts', 'client.districts.list')
        ->name('district.list');
    Route::get('/districts/{slug}', DistrictViewController::class)
        ->name('district.view');

    Route::view('/brands', 'client.brands.list')->name('brands');
    Route::get('/brands/{slug}', BrandViewController::class)
        ->name('brands.view');

    Route::get('/brands/{model}/{slug}', BrandModelViewController::class)
        ->name('brands.model.view');

    Route::view('/malfunctions', 'client.malfunctions.list')
        ->name('malfunctions.list');
    Route::get('/malfunctions/{slug}', MalfunctionViewController::class)
        ->name('malfunctions.view');

    Route::view('/contacts', 'client.contacts.view')->name('contacts');

    Route::get('/about-us', AboutViewController::class)->name('about');

    Route::get('/repair/{slug}', RepairViewController::class)
        ->name('repair.view');

    Route::get('/tip/{slug}', TypeViewController::class)
        ->name('type.view');

    Route::get('/service/{slug}', ServiceViewController::class)
        ->name('service.view');

    Route::view('/prices', 'client.prices.view')->name('prices');

    Route::get('/{slug}', PageViewController::class)
        ->name('page.view');
});

Route::post('/reviews/create', ReviewCreateController::class)
    ->name('reviews.create');

Route::post('/contact-form/create', ContactFormCreateController::class)
    ->name('contact-form.create');
