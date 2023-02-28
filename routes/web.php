<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/infos', function () {
    return view('infos');
});

// Route::get('/', function () {
//     $tasks = [
//         'Aller faire les courses',
//         'Aller à la gym',
//         'Dormir'
//     ];
//     return view('home',[
//         'tasks' => $tasks,
//         'test' => "<script>alert('YO')</script>"
//     ]);
// });

use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'contact']);
