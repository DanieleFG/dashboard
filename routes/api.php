<?php
use App\Http\Controllers\Group_TypeController;
use App\Models\Group_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//feito só para testar Route::get('/group_type', function(){
//     return 'ok';
// });
Route::get('/group_type', [Group_TypeController::class, 'index']);

Route::post('/group_type', [Group_TypeController::class, 'store']);

Route::get('/group_type/{cod_grouptype}', [Group_TypeController::class, 'show']);

Route::put('/group_type/{cod_grouptype}', [Group_TypeController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
