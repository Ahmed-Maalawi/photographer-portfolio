<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideosController;

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

//-----------   default route => reload
Route::get('/', function () {
//    return view('welcome');
    return redirect()->route('user.home');
});

Route::controller(UserController::class)->group(function () {
    Route::get('home', 'index')->name('user.home');
    Route::get('about', 'about')->name('user.about');
    Route::get('contact', 'contact')->name('user.contact');
    Route::get('service', 'service')->name('user.service');
//    Route::get('videos', 'videos')->name('user.videos');
});

//Route::get('home', [UserController::class, 'index'])->name('user.home');
//Route::get('about', [UserController::class, 'about'])->name('user.about');
//Route::get('contact', [UserController::class, 'contact'])->name('user.contact');
//Route::get('service', [UserController::class, 'service'])->name('user.service');
//Route::get('work', [UserController::class, 'work'])->name('user.work');

//Route::post('mail/submit', [ContactController::class, 'submit'])->name('mail.submit');
Route::get('/gallery/photos', [UserController::class, 'photos'])->name('gallery.photos');
Route::get('/gallery/video', [UserController::class, 'videos'])->name('gallery.video');
Route::get('/work/collection/view/{id}', [UserController::class, 'view_collection'])->name('work.photo.view');
Route::group(['prefix' => 'blog'], function() {
    Route::get('/posts/all', [PostController::class, 'allPosts'])->name('blog.index');
   Route::get('/view_post/{id}', [PostController::class, 'show'])->name('blog.view.post');

});


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin_view.index');
})->name('admin.dashboard');

//---------------   admin login routes  ---------------------------------
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.loginform');
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::group(['prefix'=> 'admin', 'middleware' => ['auth:sanctum,admin', 'verified']], function(){

//    Route::get('/admin/dashboard', function () {return view('admin_view.index');})->name('admin.dashboard');       // admin dashboard route
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');       // admin dashboard route

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


/*
|--------------------------------------------------------------------------
|                   Routese For Videos
|--------------------------------------------------------------------------
|
*/

        Route::prefix('videos')->controller(VideosController::class)->group(function() {
            Route::get('all', 'index')->name('admin.videos.all');
            Route::get('add', 'create')->name('admin.videos.create');
            Route::post('store', 'store')->name('admin.videos.store');
            Route::get('edit/{id}', 'edit')->name('admin.videos.edit');
            Route::post('update/{id}', 'update')->name('admin.video.update');
            Route::get('delete/{id}', 'destroy')->name('admin.videos.delete');
        });

    });

    Route::group(['prefix' => 'feedback', 'controller' => FeedbackController::class], function () {

       Route::get('/all',[FeedbackController::class,'index'])->name('index.feedback');
       Route::get('/add',[FeedbackController::class,'addFeedback'])->name('add.feedback');
       Route::post('/store',[FeedbackController::class,'storeFeedback'])->name('store.feedback');
       Route::get('/edit/{id}',[FeedbackController::class, 'editFeedback'])->name('edit.feedback');
       Route::post('/update',[FeedbackController::class, 'updateFeedback'])->name('update.feedback');
       Route::get('/delete/{id}',[FeedbackController::class, 'deleteFeedback'])->name('delete.feedback');
       Route::get('/disActive/{id}',[FeedbackController::class, 'disActive'])->name('disActive.feedback');
       Route::get('/Activate/{id}',[FeedbackController::class, 'Activate'])->name('Activate.feedback');

    });

    Route::group(['prefix' => 'news'], function(){

       Route::get('/all', [PostController::class, 'index'])->name('news.index');
       Route::get('/create', [PostController::class, 'create'])->name('news.create');
       Route::post('/store', [PostController::class, 'store'])->name('news.store');
       Route::get('/edit/{id}', [PostController::class, 'edit'])->name('news.edit');
       Route::post('/update/{id}', [PostController::class, 'update'])->name('news.update');
       Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('news.destroy');
       Route::get('/activated/{id}', [PostController::class, 'activatedPost'])->name('news.activated');
       Route::get('/dis-active/{id}', [PostController::class, 'disActivePost'])->name('news.dis-active');

    });
});

Route::get('login', function () {
    return view('errors.404');
});
