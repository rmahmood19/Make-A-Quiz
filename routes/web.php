<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')
    ->prefix('/dashboard')->group( function (){
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('home');

    Route::resource('quiz', QuizController::class);

    Route::post('quiz/{quiz}/add-question', [QuestionController::class,'store'])
    ->name('question.store');
    Route::get('quiz/{quiz}/edit-question/{question}', [QuestionController::class,'edit'])
            ->name('question.edit');
});





