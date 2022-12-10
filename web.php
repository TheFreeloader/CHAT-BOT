<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use App\Http\Controllers\ISController;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/main',[MainController::class,  'index']);
Route::get('/main/spellChecker',[MainController::class,  'spellChecker']);
Route::post('/main/checklogin', [MainController::class, 'checklogin']);
Route::get('/main/successlogin', [MainController::class, 'successlogin']);
Route::get('/main/logout', [MainController::class,'logout']);
Route::get('/try_hash',[MainController::class,'try_hash']);
Route::get('/main/administrator',[MainController::class,'administrator']);
Route::get('/main/manager',[MainController::class,'manager']);
Route::get('/main/tabulator',[MainController::class,'tabulator']);
Route::get('/check',[MainController::class,'check']);

Route::get('main/display_all_user_list',[ISController::class, 'display_all_user_list']);
Route::get('main/display_all_player_list',[ISController::class, 'display_all_player_list']);
Route::get('main/display_all_category_list',[ISController::class, 'display_all_category_list']);
Route::get('main/display_all_winner_list',[ISController::class, 'display_all_winner_list']);
Route::get('main/rand',[ISController::class, 'rand']);

Route::any('main/insert_user',[ISController::class, 'insert_user']);
Route::any('main/delete_user',[ISController::class, 'delete_user']);
Route::any('main/update_user',[ISController::class, 'update_user']);

Route::any('main/insert_category',[ISController::class,'insert_category']);
Route::any('main/update_category',[ISController::class, 'update_category']);
Route::any('main/delete_category',[ISController::class, 'delete_category']);

Route::any('main/insertPlayer',[ISController::class,'insertPlayer']);
Route::any('main/update_player',[ISController::class, 'update_player']);
Route::any('main/delete_player',[ISController::class, 'delete_player']);

Route::any('main/insert_winner',[ISController::class,'insert_winner']);
Route::any('main/delete_winner',[ISController::class,'delete_winner']);

Route::get('/main/messageBot',[MainController::class,  'messageBot']);
Route::any('/main/display_message',[ISController::class,  'display_message']);
