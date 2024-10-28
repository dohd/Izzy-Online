<?php

use App\Http\Controllers\CoreController;
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

Route::get('/', [CoreController::class, 'index'])->name('index');
Route::get('shop', [CoreController::class, 'shop'])->name('shop');
Route::get('detail', [CoreController::class, 'detail'])->name('detail');
Route::get('contact', [CoreController::class, 'contact'])->name('contact');

// Route::get('news', [CoreController::class, 'news'])->name('news');
// Route::get('news/{id}', [CoreController::class, 'showNews'])->name('news.show');
// Route::get('programs/{id}', [CoreController::class, 'showProgram'])->name('programs.show');

// data
// Route::get('data/header_footer', [CoreController::class, 'headerFooter'])->name('data.header_footer');
// Route::get('data/header_images', [CoreController::class, 'headerImages'])->name('data.header_images');
// Route::get('data/header_slider_texts', [CoreController::class, 'headerSliderTexts'])->name('data.header_slider_texts');
// Route::get('data/about_us', [CoreController::class, 'aboutUs'])->name('data.about_us');
// Route::get('data/pillars', [CoreController::class, 'pillars'])->name('data.pillars');
// Route::get('data/programs/{id}', [CoreController::class, 'program'])->name('data.get_program');
// Route::get('data/programs', [CoreController::class, 'programs'])->name('data.programs');
// Route::get('data/testimonials', [CoreController::class, 'testimonials'])->name('data.testimonials');
// Route::get('data/partners', [CoreController::class, 'partners'])->name('data.partners');
// Route::get('data/contacts', [CoreController::class, 'contacts'])->name('data.contacts');
// Route::get('data/blog_posts', [CoreController::class, 'blogPosts'])->name('data.blog_posts');
// Route::get('data/blog_posts/{id}', [CoreController::class, 'blogPost'])->name('data.get_blog_post');
// Route::get('data/post_tags_count', [CoreController::class, 'postTagsCount'])->name('data.post_tags_count');

// Configuration
Route::get('clear-cache', [CoreController::class, 'clearCache'])->name('config.clear_cache');
Route::get('site-down', [CoreController::class, 'siteDown'])->name('config.site_down');
