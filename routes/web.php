<?php

use App\Http\Controllers\Admin\AdminActivityCategoryController;
use Illuminate\Support\Facades\Route;

// Admin Controller
use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminPropertyController;
use App\Http\Controllers\Admin\AdminAreaController;
use App\Http\Controllers\Admin\AdminBlogpostController;
use App\Http\Controllers\Admin\AdminRoomTypeController;
use App\Http\Controllers\Admin\AdminSpecialOfferController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\RoomTypeController;

// Guest Controller
use App\Http\Controllers\Guest\PropertyController;
use App\Http\Controllers\Guest\TestimonialController;
use App\Http\Controllers\Guest\ActivityController;
use App\Http\Controllers\Guest\BlogpostController;
use App\Http\Controllers\Guest\AreaController;

// Authentication and Authorization Controller
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FindActivityController;
use App\Http\Controllers\FindAreaController;
use App\Http\Controllers\FindBlogpostController;
use App\Http\Controllers\Guest\IndexController;
use Illuminate\Support\Facades\Artisan;

// Search Controller
use App\Http\Controllers\FindPropertyController;
use App\Http\Controllers\Guest\DisplayActivitiesByCategory;
use App\Http\Controllers\Guest\FindPropertyController as GuestFindPropertyController;
use App\Http\Controllers\Guest\SearchActivityController;
use App\Http\Controllers\Guest\SearchProperty;
use App\Http\Controllers\Guest\SearchPropertyController;
use App\Http\Controllers\Guest\SpecialOfferController;
use App\Http\Controllers\SubscriberController;

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

Route::get('/test-layout',function(){
    return view('pages.test-detailed',[
        'title'=>'Test Title',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    ]);
});

Route::get('/properties/search',[GuestFindPropertyController::class,'find_property']);

Route::get('/properties/search',[SearchPropertyController::class,'search'])->name('search-property');

Route::get('/activities/search',[SearchActivityController::class,'search'])->name('search-activity');

Route::resource('/',IndexController::class);

Route::get('/about-us', function () {

    return view('pages.static.about');

});

// Defining Route to store subscriber
Route::post('/subscriber',[SubscriberController::class,'store'])->name('subscriber.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/special-offers',[SpecialOfferController::class,'index']);

Route::get('/special-offers/{slug}',[SpecialOfferController::class,'show'])->name('offer.detail');

Route::resource('/properties', PropertyController::class);

Route::resource('/testimonials', TestimonialController::class);

Route::resource('/activities', ActivityController::class);

Route::get('/activities/category/{id}', [DisplayActivitiesByCategory::class,'filter'])->name('activity-category.filter');

Route::resource('/blogpost', BlogpostController::class);

Route::resource('/areas', AreaController::class);

Route::middleware(['auth'])->group(function () {

    Route::resource('/admin/dashboard', AdminIndexController::class);

    Route::get('/admin/properties/{id}/add-room-type', [AdminPropertyController::class, 'add_room_type'])->name('properties.add-room-type');

    Route::get('/admin/properties/search',[FindPropertyController::class,'find_property']);

    Route::get('/admin/areas/search',[FindAreaController::class,'find_area']);

    Route::get('/admin/activities/search',[FindActivityController::class,'find_activity']);

    Route::get('/admin/blogposts/search',[FindBlogpostController::class,'find_blogpost']);

    Route::resource('/admin/properties', AdminPropertyController::class);

    Route::resource('/admin/activities', AdminActivityController::class);

    Route::resource('/admin/areas', AdminAreaController::class);

    Route::resource('/admin/blogpost', AdminBlogpostController::class);

    Route::resource('/admin/users', AdminUserController::class);

    Route::resource('/admin/room-type',AdminRoomTypeController::class);

    Route::resource('/admin/special-offers',AdminSpecialOfferController::class);

    Route::resource('/admin/activity-categories', AdminActivityCategoryController::class);

});

Route::get('/qrcode', function () {
    return view('pages.guest.qrcode');
});
