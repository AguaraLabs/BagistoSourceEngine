<?php

use Illuminate\Support\Facades\Route;
use Aguaralabs\Promote\Http\Controllers\Shop\PromoteController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'promote'], function () {
    Route::get('', [PromoteController::class, 'index'])->name('shop.promote.index');
});