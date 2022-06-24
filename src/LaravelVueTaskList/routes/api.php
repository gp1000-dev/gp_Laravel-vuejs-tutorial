<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* タスク一覧取得API */
Route::get('/tasks', [TaskController::class, 'index']);
/* タスク登録API */
// この位置に記述しないとルーティングの定義順に矛盾が生じてエラーになる点に注意してください
Route::post('/tasks', [TaskController::class, 'store']);
/* タスク詳細取得API */
Route::get('/tasks/{task}', [TaskController::class, 'show']);
/* タスク更新API */
// [Route::put()] データ更新時に使用するルーティングのHTTPメソッド
Route::put('/tasks/{task}', [TaskController::class, 'update']);
/* タスク削除API */
// [Route::delete()] データ削除時に使用するルーティングのHTTPメソッド
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
