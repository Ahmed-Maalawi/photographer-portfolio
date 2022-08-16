<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
//    return view('welcome');
    return redirect()->route('user.home');
});
Route::get('home', [UserController::class, 'index'])->name('user.home');
Route::get('about', [UserController::class, 'about'])->name('about');
Route::get('contact', [UserController::class, 'contact'])->name('contact');
Route::get('service', [UserController::class, 'service'])->name('service');
Route::get('work', [UserController::class, 'work'])->name('work');
//Route::post('mail/submit', [ContactController::class, 'submit'])->name('mail.submit');
Route::get('/gallery/photos', [UserController::class, 'photos'])->name('photos');
Route::get('/gallery/video', [UserController::class, 'work'])->name('work');



Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin_view.index');
})->name('admin.dashboard');

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.loginform');
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::group(['prefix'=> 'admin', 'middleware' => ['auth:sanctum,admin', 'verified']], function(){

    Route::get('/logout',[AdminController::class, 'destroy'])->name('admin.logout');

    Route::group(['prefix' => 'Our-Team'], function() {
        Route::get('/all', [MemberController::class,'addMember'])->name('team');
        Route::post('/store-member', [MemberController::class,'storeMember'])->name('store.member');
        Route::get('/edit-member/{id}', [MemberController::class,'editMember'])->name('edit.member');
        Route::post('/update-member', [MemberController::class,'updateMember'])->name('update.member');
        Route::get('/active-member/{id}', [MemberController::class,'ActiveMember'])->name('active.member');
        Route::get('/dis-active-member/{id}', [MemberController::class,'disActiveMember'])->name('disActive.member');
        Route::get('/delete-member/{id}', [MemberController::class,'delete'])->name('delete.member');
    });




    Route::group(['prefix' => 'gallery'], function ()
    {
//      -------------------------------------------   collection  routes  -----------------------------------------------------------
        Route::get('/add-collection', [CollectionController::class, 'addCollection'])->name('add.collection');
        Route::post('/store-collection', [CollectionController::class, 'storeCollection'])->name('store.collection');
        Route::get('/delete-collection/{id}', [CollectionController::class, 'deleteCollection'])->name('delete.collection');
        Route::get('/edit-collection/{id}', [CollectionController::class, 'editCollection'])->name('edit.collection');
        Route::post('/update-collection', [CollectionController::class, 'updateCollection'])->name('update.collection');
        Route::get('/active-collection/{id}', [CollectionController::class, 'activeCollection'])->name('active.collection');
        Route::get('/disActive-collection/{id}', [CollectionController::class, 'disActiveCollection'])->name('disActive.collection');

//      ------------------------------------------    Image   routes  ---------------------------------------------------------------
        Route::get('/Add-Photos/{id}', [CollectionController::class, 'addPhotos'])->name('addPhotos');
        Route::get('/delete-Photo/{id}', [CollectionController::class, 'deletePhoto'])->name('delete.photo');
        Route::post('/store-Photos', [ImageController::class, 'storeImage'])->name('storeImage');
        Route::get('/manage-image', [ImageController::class, 'displayImages'])->name('displayImages');
        Route::get('/active/{id}', [ImageController::class, 'Activate'])->name('image.Activate');
        Route::get('/disActivate/{id}', [ImageController::class, 'disActivate'])->name('image.disActivate');
        Route::get('/delete-image/{id}', [ImageController::class, 'deleteImage'])->name('delete.image');

    });

    Route::group(['prefix' => 'feedback'], function () {

       Route::get('/all', [FeedbackController::class, 'index'])->name('index.feedback');
       Route::get('/add', [FeedbackController::class, 'addFeedback'])->name('add.feedback');
       Route::post('/store', [FeedbackController::class, 'storeFeedback'])->name('store.feedback');
       Route::get('/edit/{id}', [FeedbackController::class, 'editFeedback'])->name('edit.feedback');
       Route::post('/update', [FeedbackController::class, 'updateFeedback'])->name('update.feedback');
       Route::get('/delete/{id}', [FeedbackController::class, 'deleteFeedback'])->name('delete.feedback');
       Route::get('/disActive/{id}', [FeedbackController::class, 'disActive'])->name('disActive.feedback');
       Route::get('/Activate/{id}', [FeedbackController::class, 'Activate'])->name('Activate.feedback');

    });
});

Route::get('login', function () {
    return view('errors.404');
});

