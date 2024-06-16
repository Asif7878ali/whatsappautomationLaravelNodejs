<?php

use App\Http\Controllers\BrowserAuotmate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('automate/Browser',[BrowserAuotmate::class , 'automateBrowser']);

