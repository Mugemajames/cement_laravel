<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MaterialsController;

use Illuminate\Support\Facades\Route;


Route::get('/report', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');


    Route::get('admin/report',[ReportController::class,'reportView'])->name('report.dashboard');
    Route::get('admin/users', [UsersController::class, 'users'])->name('users.page');
    Route::get('admin/create', [UsersController::class, 'create'])->name('user.create.page');
    Route::get('admin/edit/{id}', [UsersController::class, 'edit'])->name('userEdit.create');
    Route::post('admin/store', [UsersController::class, 'store'])->name('user.store');
    Route::put('admin/update/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::get('admin/delete/{id}', [UsersController::class, 'destroy'])->name('user.delete');


    Route::get('material/view', [MaterialsController::class, 'view'])->name('materials.page');
    Route::get('material/create', [MaterialsController::class, 'create'])->name('material.create.page');
    Route::post('material/store', [MaterialsController::class, 'store'])->name('material.store');
    Route::get('material/edit/{id}', [MaterialsController::class, 'edit'])->name('material.edit');
    Route::put('material/update/{id}', [MaterialsController::class, 'update'])->name('material.update');
    Route::get('material/delete/{id}', [MaterialsController::class, 'destroy'])->name('material.delete');

});// End Admin group middleware



// Agent group middleware
Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
});// End Agent group middleware

Route::get('admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');

