<?php

    return [
        App\Core\Route::get('|^user/register/?$|', 'Main' , 'getRegister'),
        App\Core\Route::post('|^user/register/?$|', 'Main', 'postRegister'),
        App\Core\Route::get('|^user/login/?$|', 'Main', 'getLogin'),
        App\Core\Route::post('|^user/login/?$|', 'Main', 'postLogin'),

        App\Core\Route::get('|^user/logout/?$|', 'Main', 'getLogout'),

        App\Core\Route::get('|^user/profile/?$|', 'UserDashboard', 'index'),

        //App\Core\Route::any('|^profile$|', 'Profile' , 'show'),
        App\Core\Route::any('|^contact$|', 'Contact', 'show'),
        App\Core\Route::any('|^product/([0-9]+)/?$|', 'Product', 'show'),

        App\Core\Route::get('|^shop$|', 'Shop', 'show'),
        App\Core\Route::post('|^shop$|', 'Shop', 'ajaxRespond'),

        App\Core\Route::get('|^api/product/([0-9]+)/?$|', 'ApiProduct', 'show'),
        App\Core\Route::get('|^api/bookmarks/?$|', 'ApiBookmark', 'getBookmarks'),
        App\Core\Route::get('|^api/bookmarks/add/([0-9]+)/?$|', 'ApiBookmark', 'addBookmark'),
        App\Core\Route::get('|^api/bookmarks/clear/?$|', 'ApiBookmark', 'clear'),

        App\Core\Route::get('|^user/products/?$|', 'UserProductManager', 'products'),
        App\Core\Route::get('|^user/products/edit/([0-9]+)/?$|', 'UserProductManager', 'getEdit'),
        App\Core\Route::post('|^user/products/edit/([0-9]+)/?$|', 'UserProductManager', 'postEdit'),

        App\Core\Route::get('|^user/products/add/?$|', 'UserProductManager', 'getAdd'),
        App\Core\Route::post('|^user/products/add/?$|', 'UserProductManager', 'postAdd'),

        App\Core\Route::get('|^profile/([0-9]+)/?$|', 'UserProManager', 'products'),
        App\Core\Route::get('|^user/product/([0-9]+)/?$|', 'UserProManager', 'products'),
        App\Core\Route::get('|^user/product/edit/([0-9]+)/?$|', 'UserProManager', 'getEdit'),
        App\Core\Route::post('|^user/product/edit/([0-9]+)/?$|', 'UserProManager', 'postEdit'),
        App\Core\Route::get('|^user/product/add/?$|', 'UserProManager', 'getAdd'),
        App\Core\Route::post('|^user/product/add/?$|', 'UserProManager', 'postAdd'),


        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];
