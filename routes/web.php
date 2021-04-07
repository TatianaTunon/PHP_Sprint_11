<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleatsController;
use App\Http\Controllers\loginController;


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

//RUTAS CRUD EMPLEATS
   //Index
    Route::get('/empleats', [empleatsController::class, 'index'])->name('empleats.index');

   //Create
    Route::get('/empleats/create', [empleatsController::class, 'create'])->name('empleats.create');
    Route::post('/empleats', [empleatsController::class, 'store'])->name('empleats.store');
    
    //Show
    Route::get('/empleats/{idempleats}', [empleatsController::class, 'show'])->name('empleats.show');
   
    //Edit
    Route::get('/empleats/{empleats}/edit', [empleatsController::class, 'edit'])->name('empleats.edit');
    Route::put('/empleats/{empleats}', [empleatsController::class, 'update'])->name('empleats.update');

    //Borrar
    Route::delete('/empleats/{empleats}', [empleatsController::class, 'destroy'])->name('empleats.destroy');


//USERS
    //Login
    Route::get('/login', [loginController::class, 'login'])->name('auth.login');
    Route::post('/login', [loginController::class, 'logincookie']);

    //Logout
    Route::post('/logout', [loginController::class, 'logout'])->name('auth.logout');

    //Register
    Route::get('/register', [loginController::class, 'store'])->name('auth.registre');
    Route::post('/register', [loginController::class, 'store'])->name('auth.registre');

    //Recuperacio
    Route::get ('/recuperacio', [loginController::class, 'showrecuperacio'])->name('auth.recuperacio');
    Route::post ('/recuperacio', [loginController::class, 'recuperacio']);


//Route::get ('/recuperacio', [usuarioController::class, 'showrecuperacio'])->name('showrecuperacio');
//Route::post ('/recuperacio', [usuarioController::class, 'recuperacio'])->name('recuperacio');