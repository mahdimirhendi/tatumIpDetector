<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::get('/detector/{ip?}',function(Request $r,$ip=null){
    return Location::get($ip ?? $r->ip);

});