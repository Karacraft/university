<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1/'], function () {
    Route::post('production',function(Request $request){
        $productions = $request->all();
        $data = [ 'status'=> false, 'message' => 'failure','code' => 200, 'production' => $productions];
        return response()->json($data);
    });
    Route::get('getter',function(Request $request){
        $data = [ 'status'=> false, 'message' => 'getter','code' => 200];
        return response()->json($data);
    });
});

