<?php

use App\Http\Controllers\Admin\ActivitiesController;
use App\Http\Controllers\Admin\CeoinfoController;
use App\Http\Controllers\Admin\MenubarController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SupporterController;
use App\Http\Controllers\Admin\WidgetController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //slider
    Route::resource('menubars',MenubarController::class);

    //slider
    Route::resource('sliders',SliderController::class);

    //activities
    Route::resource('activities',ActivitiesController::class);

    //ceo-information
    Route::get('/ceos',[CeoinfoController::class,'index'])->name('ceos.index');
    Route::post('/ceos/update',[CeoinfoController::class,'update'])->name('ceos.update');

    //supporter
    Route::resource('supporters',SupporterController::class);
    //widget-contact/address
    Route::get('/widgets',[WidgetController::class,'index'])->name('widgets.index');
    Route::post('/widgets/update',[WidgetController::class,'update'])->name('widgets.update');

    //profile setting
    Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
    Route::post('/widgets/update',[WidgetController::class,'update'])->name('widgets.update');
});
