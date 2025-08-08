<?php

use Illuminate\Support\Facades\Route;
use Aguaralabs\Promote\Http\Controllers\Admin\PromoteController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/promote'], function () {
    Route::controller(PromoteController::class)->group(function () {
        Route::get('', 'index')->name('admin.promote.index');
        Route::get('create', 'create')->name('admin.promote.create');
        Route::post('store', 'store')->name('admin.promote.store');
    });
});
