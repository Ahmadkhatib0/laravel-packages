<?php

use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

Route::get('/', function () {
    return Activity::all()->last();
    return view('welcome');
});
