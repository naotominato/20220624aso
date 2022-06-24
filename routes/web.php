<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;



//面談前テスト
//use App\Http\Controllers\LessonController;

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

Route::get('/', [TodoController::class, 'index']);
//Route::post('/', [TodoController::class, 'button']);

//Route::post('/', [TodoController::class, 'postHoge']);

Route::post('/todo/create', [TodoController::class, 'create']);

Route::post('/todo/update', [TodoController::class, 'update']);

Route::post('/todo/delete', [TodoController::class, 'delete']);



//Todo::find($request->id)->update($items)

//コントローラー
//public function postHoge()
//    {
//        if (Input::get('create')){
//            $this->create();
//       } elseif (Input::get('update')) {
//            $this->update();
//        } elseif (Input::get('delete')) {
//            $this->delete();
//        } else {
//            $this->index();
//        }
//    }


//面談前テスト
//Route::get('/get', [LessonController::class, 'index']);
//Route::post('/get', [LessonController::class, 'created']);
//Route::get('/thanks', function () {
//    return view('thanks');
//});