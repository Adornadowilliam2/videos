<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login',[App\Http\Controllers\AuthController::class,'login']);


Route::middleware(['auth:api'])->group(function(){

    Route::get('checkToken',[App\Http\Controllers\AuthController::class,'checkToken']);
    Route::post('revokeToken',[App\Http\Controllers\AuthController::class,'revokeToken']);
});

    Route::prefix('videos')->group(function () {
        Route::get('/getVideos',[App\Http\Controllers\VideoController::class,'show']);
    
        Route::post('/addVideo', [App\Http\Controllers\VideoController::class,'insert']);
    
        Route::post('/updateVideo',[App\Http\Controllers\VideoController::class,'update']);
    
        Route::post('/deleteVideo',[App\Http\Controllers\VideoController::class,'delete']);
    });
    