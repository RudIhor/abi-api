<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Nutgram\Laravel\Middleware\ValidateWebAppData;

Route::middleware([ValidateWebAppData::class])->group(function () {
    Route::apiSingleton('profile', ProfileController::class);
});
