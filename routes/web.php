<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'front.'], static function () {
    Route::view('/', 'pages.front.homepage')->name('homepage');
});
