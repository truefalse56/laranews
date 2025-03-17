<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [Controllers\AboutController::class, 'index']);

// Админка
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.index');

    // Категории (оставляем как есть)
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/show/{category}', 'ShowController')->name('admin.category.show');
        Route::get('{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    // Теги (оставляем как есть)
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/show/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });

    // Посты (оставляем как есть)
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/show/{post}', 'ShowController')->name('admin.post.show');
        Route::get('{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });

    // Пользователи (оставляем как есть)
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/show/{user}', 'ShowController')->name('admin.user.show');
        Route::get('{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    // Баннеры
    Route::group(['namespace' => 'Banner', 'prefix' => 'banners'], function () {
        Route::get('/', 'BannerController@index')->name('admin.banner.index');
        Route::get('/create', 'BannerController@create')->name('admin.banner.create');
        Route::post('/', 'BannerController@store')->name('admin.banner.store');
        Route::get('/show/{banner}', 'BannerController@show')->name('admin.banner.show');
        Route::get('{banner}/edit', 'BannerController@edit')->name('admin.banner.edit');
        Route::patch('/{banner}', 'BannerController@update')->name('admin.banner.update');
        Route::delete('/{banner}', 'BannerController@destroy')->name('admin.banner.delete');
    });
});

// Остальные маршруты (блог, посты, личный кабинет) оставляем без изменений