<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* すべてのURLで app.blade.php を表示する設定 */
// [/{any}] "/"以下のアクセスを すべて（{any}）に指定する
// [->where('any', '.*')] 正規表現で"any"に".*（すべて）"を指定する ※where()は複数のルートを指定する際に用いられます
// "/{any}"の指定のみだと not Found のエラーになる点に注意してください
Route::get('/{any}', function() {
    // app.blade.phpを表示する
    return view('app');
})->where('any', '.*');
