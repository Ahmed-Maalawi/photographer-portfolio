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
| User Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return redirect()->route('user.home');
});


/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|   this routes for all website main pages for customer.
*/

Route::controller(UserController::class)->group(function () {
    Route::get('home', 'index')->name('user.home');
    Route::get('about', 'about')->name('user.about');
    Route::get('contact', 'contact')->name('user.contact');
    Route::get('service', 'service')->name('user.service');
    Route::get('work', 'work')->name('user.work');
    Route::get('/gallery/photos', 'photos')->name('user.gallery.photos');
    Route::get('/gallery/video', 'videos')->name('user.gallery.videos');
    Route::get('/work/collection/view/{id}', 'view_collection')->name('user.work.photo.view');
});


/*
|--------------------------------------------------------------------------
| Customer Blog Routes
|--------------------------------------------------------------------------
|   this routes for all Blog pages for customer.
*/

Route::group(['prefix' => 'blog', 'controller' => PostController::class], function() {
    Route::get('/posts/all', 'allPosts')->name('user.blog.index');
    Route::get('/view_post/{id}', 'show')->name('user.blog.view.post');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin_view.index');
})->name('admin.dashboard');

//---------------   admin login routes  ---------------------------------
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin'], 'controller' => AdminController::class], function(){
    Route::get('/login', 'loginForm')->name('admin.loginform');
    Route::post('/login/submit','store')->name('admin.login');
});

Route::group(['prefix'=> 'admin', 'middleware' => ['auth:sanctum,admin', 'verified']], function(){

    Route::group(['controller' => AdminController::class], function () {
       Route::get('/dashboard', 'index')->name('admin.dashboard');
       Route::get('/logout', 'destroy')->name('admin.logout');

        //    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');       // admin dashboard route
//    Route::get('/logout',[AdminController::class, 'destroy'])->name('admin.logout');

    });

    Route::group(['prefix' => 'team','controller' => MemberController::class], function () {
        Route::get('/all', 'addMember')->name('team');
        Route::post('/store-member', 'storeMember')->name('store.member');
        Route::get('/edit-member/{id}', 'editMember')->name('edit.member');
        Route::post('/update-member', 'updateMember')->name('update.member');
        Route::get('/active-member/{id}', 'ActiveMember')->name('active.member');
        Route::get('/dis-active-member/{id}', 'disActiveMember')->name('disActive.member');
        Route::get('/delete-member/{id}', 'delete')->name('delete.member');
    });



    Route::group(['prefix' => 'gallery', 'controller' => CollectionController::class], function ()
    {
//      -------------------------------------------   collection  routes  -----------------------------------------------------------
        Route::get('/add-collection', 'addCollection')->name('add.collection');
        Route::post('/store-collection', 'storeCollection')->name('store.collection');
        Route::get('/delete-collection/{id}', 'deleteCollection')->name('delete.collection');
        Route::get('/edit-collection/{id}', 'editCollection')->name('edit.collection');
        Route::post('/update-collection', 'updateCollection')->name('update.collection');
        Route::get('/active-collection/{id}', 'activeCollection')->name('active.collection');
        Route::get('/disActive-collection/{id}', 'disActiveCollection')->name('disActive.collection');
        Route::get('/Add-Photos/{id}', 'addPhotos')->name('addPhotos');
        Route::get('/delete-Photo/{id}', 'deletePhoto')->name('delete.photo');

//      ------------------------------------------    Image   routes  ---------------------------------------------------------------
        Route::group(['controller' => ImageController::class], function () {
            Route::post('/store-Photos', 'storeImage')->name('storeImage');
            Route::get('/manage-image', 'displayImages')->name('displayImages');
            Route::get('/active/{id}', 'Activate')->name('image.Activate');
            Route::get('/disActivate/{id}', 'disActivate')->name('image.disActivate');
            Route::get('/delete-image/{id}', 'deleteImage')->name('delete.image');
        });



/*
|--------------------------------------------------------------------------
|                   Routese For Videos
|--------------------------------------------------------------------------
|
*/
        Route::group(['prefix' => 'videos', 'controller' => VideosController::class], function () {
            Route::get('all', 'index')->name('admin.videos.all');
            Route::get('add', 'create')->name('admin.videos.create');
            Route::post('store', 'store')->name('admin.videos.store');
            Route::get('edit/{id}', 'edit')->name('admin.videos.edit');
            Route::post('update/{id}', 'update')->name('admin.video.update');
            Route::get('delete/{id}', 'destroy')->name('admin.videos.delete');
        });
//        Route::prefix('videos')->controller(VideosController::class)->group(function() {
//            Route::get('all', 'index')->name('admin.videos.all');
//            Route::get('add', 'create')->name('admin.videos.create');
//            Route::post('store', 'store')->name('admin.videos.store');
//            Route::get('edit/{id}', 'edit')->name('admin.videos.edit');
//            Route::post('update/{id}', 'update')->name('admin.video.update');
//            Route::get('delete/{id}', 'destroy')->name('admin.videos.delete');
//        });

    });

    Route::group(['prefix' => 'feedback', 'controller' => FeedbackController::class], function () {

       Route::get('/all','index')->name('index.feedback');
       Route::get('/add','addFeedback')->name('add.feedback');
       Route::post('/store','storeFeedback')->name('store.feedback');
       Route::get('/edit/{id}','editFeedback')->name('edit.feedback');
       Route::post('/update','updateFeedback')->name('update.feedback');
       Route::get('/delete/{id}','deleteFeedback')->name('delete.feedback');
       Route::get('/disActive/{id}','disActive')->name('disActive.feedback');
       Route::get('/Activate/{id}','Activate')->name('Activate.feedback');

    });

    Route::group(['prefix' => 'news', 'controller' => PostController::class], function(){

       Route::get('/all', 'index')->name('news.index');
       Route::get('/create', 'create')->name('news.create');
       Route::post('/store', 'store')->name('news.store');
       Route::get('/edit/{id}', 'edit')->name('news.edit');
       Route::post('/update/{id}', 'update')->name('news.update');
       Route::get('/delete/{id}', 'destroy')->name('news.destroy');
       Route::get('/activated/{id}', 'activatedPost')->name('news.activated');
       Route::get('/dis-active/{id}', 'disActivePost')->name('news.dis-active');

    });
});

Route::get('login', function () {
    return view('errors.404');
});
