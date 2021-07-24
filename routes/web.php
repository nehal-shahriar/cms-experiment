<?php

use App\Http\Livewire\Admin\AdminAddBlogs;
use App\Http\Livewire\Admin\AdminBlogs;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\BlogList;
use App\Http\Livewire\DetailBlog;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

//user panel
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
//admin panel
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/blogs',AdminBlogs::class)->name('admin.blogs');
    Route::get('/admin/blogs/add',AdminAddBlogs::class)->name('admin.addblogs');
});
Route::get('/bloglist',BlogList::class)->name('bloglist');
Route::get('/{urlslug}',DetailBlog::class);
Route::get('/', HomeComponent::class);
