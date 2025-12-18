<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\SinglePostController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsConditionController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/blog/{slug}', [SinglePostController::class,'show'])->name('single-post');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/privacy-policy', [PrivacyPolicyController::class,'index'])->name('privacy-policy');
Route::get('/terms-condition', [TermsConditionController::class,'index'])->name('terms-condition');
Route::get('/search', [SearchController::class,'index'])->name('search');




