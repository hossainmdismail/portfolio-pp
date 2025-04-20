<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [SinglePageController::class, 'about'])->name('about');
Route::get('/contact', [SinglePageController::class, 'contact'])->name('contact');
// Route::get('/blog/{slug}', [BlogController::class, 'view'])->name('blog.view');
Route::get('/projects', [ProjectController::class, 'projects'])->name('projects.view');
Route::get('/casetudy', [ProjectController::class, 'casetudy'])->name('casetudy.view');
Route::get('/project/{slug}', [ProjectController::class, 'view'])->name('project.view');


Route::get('/sitemap', [SitemapController::class, 'index']);
