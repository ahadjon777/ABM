<?php

use App\Http\Controllers\ProfileController;
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
    return view('admin.master.main');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['auth', 'role:admin']], function (){
    Route::get('dashboard',[ \App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('dashboard');
    Route::get('/front', [\App\Http\Controllers\TestController::class, 'front']);
    Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('setting');
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');
    Route::get('/notification', [App\Http\Controllers\Admin\ProfileController::class, 'notification'])->name('notification');
    Route::get('/connection', [App\Http\Controllers\Admin\ProfileController::class, 'connection'])->name('connection');
    Route::put('/setting/edit', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('setting.update');
    Route::put('/profile/edit', [App\Http\Controllers\Admin\ProfileController::class,'update'])->name('profile.update');
    Route::put('/change/password', [\App\Http\Controllers\Admin\ChangePasswordController::class, 'update'])->name('change_password');

    Route::put('/social/{name}', [App\Http\Controllers\Admin\ProfileController::class,'social'])->name('profile.social');

    Route::get('/table', [\App\Http\Controllers\TableController::class, 'index'])->name('all.table');
    Route::resource('table/computer', \App\Http\Controllers\Computer\CompyuterController::class);
    Route::resource('table/monoblok',\App\Http\Controllers\Monoblok\MonoblokController::class);
    Route::resource('/boshqarma', \App\Http\Controllers\Boshqarma\BoshqarmaController::class);
    Route::resource('/technology',App\Http\Controllers\Technology\TechnologyController::class);

});




require __DIR__.'/auth.php';
