<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsCategoryController;
use App\Http\Controllers\SkillsController;
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

Route::get('/',[HomeController::class, 'home']);

Route::get('/admin', [AdminController::class, 'index']);

//Skills and skills category

Route::get('/admin/skills', [SkillsController::class, 'index'])->name('admin.skills');
Route::get('/admin/skills/create', [SkillsController::class, 'create'])->name('admin.skills.create');
Route::post('/admin/skills/store', [SkillsController::class, 'store'])->name('admin.skills.store');
Route::delete('/admin/skills/delete/{category_id}', [SkillsController::class, 'delete'])->name('admin.skills.delete');
Route::put('/admin/skills/update/{category_id}', [SkillsController::class, 'update'])->name('admin.skills.update');

Route::get('/admin/skills/categories', [SkillsCategoryController::class, 'index'])->name('admin.skills.categories');
Route::post('/admin/skills/categories/store', [SkillsCategoryController::class, 'store'])->name('admin.skills.categories.store');
Route::delete('/admin/skills/categories/delete/{category_id}', [SkillsCategoryController::class, 'delete'])->name('admin.skills.categories.delete');
Route::put('/admin/skills/categories/update/{category_id}', [SkillsCategoryController::class, 'update'])->name('admin.skills.categories.update');

//Services

Route::get('/admin/services', [ServicesController::class, 'index'])->name('admin.services');
Route::get('/admin/services/create', [ServicesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/store', [ServicesController::class, 'store'])->name('admin.services.store');
Route::delete('/admin/services/delete/{category_id}', [ServicesController::class, 'delete'])->name('admin.services.delete');
Route::put('/admin/services/update/{category_id}', [ServicesController::class, 'update'])->name('admin.services.update');
