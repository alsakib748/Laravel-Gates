<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PostController::class)->group(function(){

    Route::get('/all/post/{id}','index')->name('all.post');

    Route::get('/post/edit/{id}','edit')->name('post.edit');

    Route::get('/post/delete/{id}','delete')->name('post.delete');

});

Route::controller(AdminController::class)->group(function(){

    // todo: One way to execute gate on route
    // Route::get('/dashboard','dashboard')->name('dashboard')->middleware('can:isAdmin');
   // todo: multiple gate use
    // Route::get('/dashboard','dashboard')->name('dashboard')->middleware('can:isAdmin,isSuperAdmin');

    // todo: Second way to execute gate on route
    // Route::get('/dashboard','dashboard')->name('dashboard')->can( 'isAdmin');

    Route::get('/dashboard','dashboard')->name('dashboard');

    Route::get('/profile/{id}','profileData')->name('profile.data');

    Route::get('/logout','logout')->name('logout');

});

require __DIR__.'/auth.php';
