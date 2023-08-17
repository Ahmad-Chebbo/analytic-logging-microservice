<?php

use App\Jobs\ProcessStreamLog;
use App\Models\StreamingLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/log', function (Request $request) {
        StreamingLog::create([
            'episode_id' =>  $request->input('episode_id'),
            'user_id' => $request->user()->id,
            'ip_address' => $request->input('ip_address'),
        ]);
    });
});

