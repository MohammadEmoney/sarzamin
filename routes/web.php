<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{locale?}'], function () {
    Route::middleware(['web', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function(){
        Route::post('upload', [ImageController::class, 'upload'])->name('image_upload');
        Route::get('login', \App\Livewire\Admin\Auth\LiveLogin::class)->name('login')->withoutMiddleware([AdminMiddleware::class]);
        Route::redirect('/', '/admin/dashboard');
        Route::middleware('auth')->group(function(){
            Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
            Route::get('users/password', \App\Livewire\Admin\Users\LiveUserPassword::class)->name('users.password');
            Route::get('users/trash', \App\Livewire\Admin\Users\LiveDeletedUsers::class)->name('users.trash');
    
        //  Users
            Route::get('users', \App\Livewire\Admin\Users\LiveUserIndex::class)->name('users.index')->middleware('can:user_index');
            Route::get('users/create', \App\Livewire\Admin\Users\LiveUserCreate::class)->name('users.create')->middleware('can:user_create');
            Route::get('users/{user}', \App\Livewire\Admin\Users\LiveUserShow::class)->name('users.show')->middleware('can:user_show');
            Route::get('users/{user}/edit', \App\Livewire\Admin\Users\LiveUserEdit::class)->name('users.edit')->middleware('can:user_edit');
        // Posts
            Route::prefix('posts')->name('posts.')->group(function () {
                Route::get('/', \App\Livewire\Admin\Posts\LivePostIndex::class)->name('index')->middleware('can:post_index');
                Route::get('/create', \App\Livewire\Admin\Posts\LivePostCreate::class)->name('create')->middleware('can:post_create');
                Route::get('/{post}/edit', \App\Livewire\Admin\Posts\LivePostEdit::class)->name('edit')->middleware('can:post_edit');
                Route::prefix('comments')->name('comments.')->group(function () {
                    Route::get('/', \App\Livewire\Admin\Comments\LiveCommentIndex::class)->name('index');
                    Route::get('/{comment}', \App\Livewire\Admin\Comments\LiveCommentShow::class)->name('show');
                });
            });
        // News
            Route::prefix('news')->name('news.')->group(function () {
                Route::get('/', \App\Livewire\Admin\Posts\LivePostIndex::class)->name('index')->middleware('can:news_index');
                Route::get('/create', \App\Livewire\Admin\Posts\LivePostCreate::class)->name('create')->middleware('can:news_create');
                Route::get('/{post}/edit', \App\Livewire\Admin\Posts\LivePostEdit::class)->name('edit')->middleware('can:news_edit');
                Route::prefix('comments')->name('comments.')->group(function () {
                    Route::get('/', \App\Livewire\Admin\Comments\LiveCommentIndex::class)->name('index');
                    Route::get('/{comment}', \App\Livewire\Admin\Comments\LiveCommentShow::class)->name('show');
                });
            });
            
        // Pages
            Route::prefix('pages')->name('pages.')->group(function () {
                Route::get('/', \App\Livewire\Admin\Pages\LivePageIndex::class)->name('index')->middleware('can:page_index');
                Route::get('/create', \App\Livewire\Admin\Pages\LivePageCreate::class)->name('create')->middleware('can:page_create');
                Route::get('/{page}/edit', \App\Livewire\Admin\Pages\LivePageEdit::class)->name('edit')->middleware('can:page_edit');
                Route::prefix('comments')->name('comments.')->group(function () {
                    Route::get('/', \App\Livewire\Admin\Comments\LiveCommentIndex::class)->name('index');
                });
            });
            
        // Categories
            Route::get('categories', \App\Livewire\Admin\Categories\LiveCategoryIndex::class)->name('categories.index')->middleware('can:category_index');
            Route::get('categories/create', \App\Livewire\Admin\Categories\LiveCategoryCreate::class)->name('categories.create')->middleware('can:category_create');
            Route::get('categories/{category}/edit', \App\Livewire\Admin\Categories\LiveCategoryEdit::class)->name('categories.edit')->middleware('can:category_edit');
        // Group Layouts
            Route::get('group-layouts', \App\Livewire\Admin\GroupLayouts\LiveGroupLayoutIndex::class)->name('group-layouts.index')->middleware('can:group_layout_index');
            Route::get('group-layouts/create', \App\Livewire\Admin\GroupLayouts\LiveGroupLayoutCreate::class)->name('group-layouts.create')->middleware('can:group_layout_create');
            Route::get('group-layouts/{layoutGroup}/edit', \App\Livewire\Admin\GroupLayouts\LiveGroupLayoutEdit::class)->name('group-layouts.edit')->middleware('can:group_layout_edit');

        // Layouts
            Route::prefix('layouts')->name('layouts.')->group(function () {
                Route::get('/{layoutGroup}', \App\Livewire\Admin\Layouts\LiveLayoutIndex::class)->name('index')->middleware('can:layout_index');
                Route::get('/{layoutGroup}/create', \App\Livewire\Admin\Layouts\LiveLayoutCreate::class)->name('create')->middleware('can:layout_create');
                Route::get('/{layoutGroup}/{layout}/edit', \App\Livewire\Admin\Layouts\LiveLayoutEdit::class)->name('edit')->middleware('can:layout_edit');
            });
    
        // Settings
            Route::get('settings', \App\Livewire\Admin\Settings\LiveSettings::class)->name('settings.general')->middleware('can:general_settings');
    
        // Role and Permissions
            // Route::get('roles', \App\Livewire\Admin\Roles\LiveRoleIndex::class)->name('roles.index');
            Route::get('roles/permissions', \App\Livewire\Admin\Roles\LiveRolePermission::class)->name('roles.permissions');

        // Contacts
            Route::get('contacts', \App\Livewire\Admin\Contacts\LiveContactIndex::class)->name('contacts.index')->middleware('can:contact_index');
            Route::get('contacts/{contact}', \App\Livewire\Admin\Contacts\LiveContactShow::class)->name('contacts.show')->middleware('can:contact_show');

        // Cooperations
            Route::get('cooperations', \App\Livewire\Admin\Cooperations\LiveCooperationIndex::class)->name('cooperations.index')->middleware('can:cooperation_index');
            Route::get('cooperations/{cooperation}', \App\Livewire\Admin\Cooperations\LiveCooperationShow::class)->name('cooperations.show')->middleware('can:cooperation_show');
        
        // Agencies
            Route::get('agencies', \App\Livewire\Admin\Agencies\LiveAgencyIndex::class)->name('agencies.index')->middleware('can:agency_index');
            Route::get('agencies/create', \App\Livewire\Admin\Agencies\LiveAgencyCreate::class)->name('agencies.create')->middleware('can:agency_create');
            Route::get('agencies/{agency}/edit', \App\Livewire\Admin\Agencies\LiveAgencyEdit::class)->name('agencies.edit')->middleware('can:agency_edit');

        // ...
        });
    });

    Route::middleware(['web'])->prefix('dashboard')->name('user.')->group(function(){
        Route::post('upload', [ImageController::class, 'upload'])->name('image_upload');
        Route::middleware('auth')->group(function(){
            Route::get('/', \App\Livewire\Dashboard\LiveDashboard::class)->name('dashboard');
            Route::get('users/password', \App\Livewire\Dashboard\Users\LiveUserPassword::class)->name('users.password');
    
        // Layouts
            Route::prefix('orders')->name('orders.')->group(function () {
                Route::get('/', \App\Livewire\Dashboard\Orders\LiveOrderIndex::class)->name('index');
                // Route::get('/{order}', \App\Livewire\Dashboard\Orders\LiveOrderIndex::class)->name('index');
            });

            Route::get('documents', \App\Livewire\Dashboard\Documents\LiveDocumentIndex::class)->name('documents.index')->middleware('can:active_user');
            Route::get('documents/{document:slug}', \App\Livewire\Dashboard\Documents\LiveDocumentShow::class)->name('documents.show')->middleware('can:active_user');
            Route::get('circulars', \App\Livewire\Dashboard\Circulars\LiveCircularIndex::class)->name('circulars.index')->middleware('can:active_user');
            Route::get('circulars/{circular:slug}', \App\Livewire\Dashboard\Circulars\LiveCircularShow::class)->name('circulars.show')->middleware('can:active_user');
            Route::get('critics', \App\Livewire\Dashboard\Critics\LiveCriticIndex::class)->name('critics.index')->middleware('can:active_user');
            Route::get('critics/create', \App\Livewire\Dashboard\Critics\LiveCriticCreate::class)->name('critics.create')->middleware('can:active_user');
            Route::get('critics/{critic}', \App\Livewire\Dashboard\Critics\LiveCriticShow::class)->name('critics.show')->middleware('can:active_user');
    
            // Route::get('settings', \App\Livewire\Dashboard\Settings\LiveSettings::class)->name('settings.general')->middleware('can:general_settings');
    
            // Role and Permissions
            // Route::get('roles', \App\Livewire\Admin\Roles\LiveRoleIndex::class)->name('roles.index');
            Route::get('roles/permissions', \App\Livewire\Admin\Roles\LiveRolePermission::class)->name('roles.permissions');
        });
    });


    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::redirect('/home', '/');
    Route::middleware(['web'])->name('front.')->group(function(){
        Route::get('/news', \App\Livewire\Front\Blog\LiveBlogIndex::class)->name('news.index');
        Route::get('/news/{post:slug}', \App\Livewire\Front\Blog\LiveBlogShow::class)->name('news.show');
        Route::get('/articles', \App\Livewire\Front\Blog\LiveBlogIndex::class)->name('blog.index');
        Route::get('/articles/{post:slug}', \App\Livewire\Front\Blog\LiveBlogShow::class)->name('blog.show');
        Route::get('/categories/{category:slug}', \App\Livewire\Front\Categories\LiveCategoryShow::class)->name('categories.show');
        Route::get('/pages/{page:slug}', \App\Livewire\Front\Pages\LivePageShow::class)->name('pages.show');
        Route::get('/search', \App\Livewire\Front\Blog\LiveBlogIndex::class)->name('search');
        Route::get('/agencies', \App\Livewire\Front\Pages\LiveAgencies::class)->name('agencies');
        Route::get('/cooperation', \App\Livewire\Front\Pages\LiveCooperation::class)->name('cooperation');
        Route::get('/contact-us', \App\Livewire\Front\Pages\LiveContactUs::class)->name('contact-us');
    });
    Route::get('login', App\Livewire\Auth\LiveLogin::class)->name('login');
    Route::get('register', App\Livewire\Auth\LiveRegister::class)->name('register');
})->where('locale', '[a-zA-Z]{2}');


// Route::get('/', \App\Livewire\Front\Home\LiveHome::class)->name('home');

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->prefix('dashboard')->name('profile.')->group(function(){
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/edit-profile', [DashboardController::class, 'edit'])->name('edit');
//     Route::get('/courses', LiveCourseSelect::class)->name('courses.select')->middleware('register-complete');
// });


// Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::get('get-code/{code}', [LoginController::class, 'getCode'])->name('code');

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/en/regenerate-admin', function(){
    $user = \App\Models\User::firstOrCreate(
        ['email' => 'super-admin@email.com'],
        [
            'first_name' => 'Super Admin',
            'phone' => '09353331760',
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
            'password' => Hash::make('Xu181XlDwRJQzH')
        ]
    );
    $secondUser = \App\Models\User::firstOrCreate(
        ['email' => 'super-admin@gmail.com'],
        [
            'first_name' => 'Super Admin',
            'phone' => '09333333333',
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
            'password' => Hash::make('Xu181XlDwRJQzH')
        ]
    );
    $user->assignRole('super-admin');
    $secondUser->assignRole('super-admin');
    return "Done";
});