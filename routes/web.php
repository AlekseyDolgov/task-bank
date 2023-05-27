<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlockController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SpravController;
use App\Http\Controllers\OtvetController;

use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('main.index');
//});

Route::get('/', [BlockController::class, 'index']);
Route::get('/add-task', [BlockController::class, 'add']);
Route::post('/block', [BlockController::class, 'store']);

Route::get('/tasks/index', [TaskController::class, 'index']);
Route::get('tasks/show/{id}', [TaskController::class, 'show']);
Route::get('/task/index/addTask', [TaskController::class, 'add'])->name('add_task.block');
Route::get('/sprav/showSprav', [TaskController::class, 'show_sprav'])->name('showSprav');
Route::get('show/{id}', [TaskController::class, 'show'])->name('showTask');
Route::post('/tasks/index', [TaskController::class, 'store']);

Route::any('/test', [TestController::class, 'test']); // в этом контроллере можно тестировать методы

Route::get('/sprav', [SpravController::class, 'index']);

Route::get('sprav/show/{id}', [SpravController::class, 'show']);
Route::get('/add-sprav', [SpravController::class, 'add']);
Route::post('/sprav', [SpravController::class, 'store']);


Route::get('/search', [SpravController::class, 'search'])->name('search');
Route::get('show/{id}', [SpravController::class,'show'])->name('show');

Route::get('/add_otvet', [OtvetController::class, 'add'])->name('addOtvet');
Route::get('/otvet', [OtvetController::class, 'index']);
Route::get('/otvet/showOtvet/{id}', [OtvetController::class, 'show_otvet'])->name('showOtvet');
Route::get('otvet/show/{id}', [OtvetController::class, 'show']);
Route::post('otvet', [OtvetController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
