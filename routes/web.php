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
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\Admin\VoucherController;
// Guest Controller
use App\Http\Controllers\Guest\PropertyController;
use App\Http\Controllers\Guest\TestimonialController;
use App\Http\Controllers\Guest\ActivityController;
use App\Http\Controllers\Guest\BlogpostController;
use App\Http\Controllers\Guest\AreaController;

// Form Validation
use Spatie\Honeypot\ProtectAgainstSpam;

// Authentication and Authorization Controller
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FindActivityController;
use App\Http\Controllers\FindAreaController;
use App\Http\Controllers\FindBlogpostController;
use App\Http\Controllers\Guest\IndexController;
use Illuminate\Support\Facades\Artisan;

// Search Controller
use App\Http\Controllers\FindPropertyController;
use App\Http\Controllers\Guest\AboutUsController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\DisplayActivitiesByCategory;
use App\Http\Controllers\Guest\FeedbackController;
use App\Http\Controllers\Guest\FindPropertyController as GuestFindPropertyController;
use App\Http\Controllers\Guest\SearchActivityController;
use App\Http\Controllers\Guest\SearchProperty;
use App\Http\Controllers\Guest\SearchPropertyController;
use App\Http\Controllers\Guest\SpecialOfferController;
use App\Http\Controllers\SubscriberController;
use App\Models\Feedback;

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


Route::get('/properties/search',[GuestFindPropertyController::class,'find_property']);

Route::get('/properties/search',[SearchPropertyController::class,'search'])->name('search-property');

Route::get('/activities/search',[SearchActivityController::class,'search'])->name('search-activity');

Route::get('/',[IndexController::class,'index'])->name('welcome');

Route::get('/about-us',[AboutUsController::class,'index'])->name('about-us');

Route::get('/contact-us',[ContactController::class,'index'])->name('guest.contact-us.index');

Route::get('/properties',[PropertyController::class,'index'])->name('guest.properties.index');

Route::get('/properties/{slug}',[PropertyController::class,'show'])->name('guest.properties.show');

Route::get('/activities',[ActivityController::class,'index'])->name('guest.activities.index');

Route::get('/activities/{slug}',[ActivityController::class,'show'])->name('guest.activities.show');

Route::get('/areas',[AreaController::class,'index'])->name('guest.areas.index');

Route::get('/areas/{location}', [AreaController::class, 'show'])->name('guest.areas.show');

Route::get('/blogpost',[BlogpostController::class,'index'])->name('guest.blogpost.index');

Route::get('/blogpost/{slug}',[BlogpostController::class,'show'])->name('guest.blogpost.show');

Route::get('/contact-us',[ContactController::class,'index'])->name('guest.contact-us');

Route::get('/guest-stay-feedback',[FeedbackController::class,'index'])->name('guest.feedback.index');

Route::post('/guest-stay-feedback',[FeedbackController::class,'submit'])->name('guest.feedback.submit')->middleware(ProtectAgainstSpam::class);

Route::post('/guest-stay-feedback/send-to-email',[FeedbackController::class,'sendToEmail'])->name('guest.feedback.send');

// DELETE LATER
Route::get('/pdf',[FeedbackController::class,'pdf']);


// Defining Route to store subscriber
Route::post('/subscriber',[SubscriberController::class,'store'])->name('subscriber.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/special-offers',[SpecialOfferController::class,'index'])->name('guest.special-offers.index');

Route::get('/special-offers/{slug}',[SpecialOfferController::class,'show'])->name('guest.special-offers.show');

// Route::resource('/properties', PropertyController::class);

// Route::resource('/testimonials', TestimonialController::class);

// Route::resource('/activities', ActivityController::class);

Route::get('/activities/category/{id}', [DisplayActivitiesByCategory::class,'filter'])->name('activity-category.filter');

// Route::resource('/blogpost', BlogpostController::class);

// Route::resource('/areas', AreaController::class);

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

    Route::get('/admin/feedback/index',[AdminFeedbackController::class,'index'])->name('admin.feedback.index');

    Route::get('/admin/feedback/download',[AdminFeedbackController::class,'download'])->name('admin.feedback.download');

    Route::get('/admin/feedback/download/filter/',[AdminFeedbackController::class,'downloadWithFilter'])->name('admin.feedback.download-with-filter');

    Route::get('/admin/vouchers/index',[VoucherController::class,'index'])->name('admin.vouchers.index');

    Route::get('/admin/vouchers/create',[VoucherController::class,'create'])->name('admin.vouchers.create');

    Route::post('/admin/vouchers/store',[VoucherController::class,'store'])->name('admin.vouchers.store');

    Route::delete('/admin/vouchers/{voucherId}/disable',[VoucherController::class,'disable'])->name('admin.vouchers.disable');

    Route::get('/admin/vouchers/{id}/select-user',[VoucherController::class,'select_user'])->name('admin.vouchers.select-user');

    Route::post('/admin/vouchers/send-email',[VoucherController::class,'send_email'])->name('admin.vouchers.send-email');

});

Route::get('/qrcode', function () {
    return view('pages.guest.qrcode');
});
