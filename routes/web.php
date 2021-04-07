<?php

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
    return view('welcome');
});

Route::get('/articles/{article}', [App\Http\Controllers\ArticlesController::class, 'show']);
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index']);

Route::get('/about', function () {
    $articles= App\Models\Article::latest()->get();
   // return $articles;
    return view('about',[
        'articles' => $articles
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/xyz', function () {
    //$name = request('name');
    //return $name;
    return view('homar',[
        'nev' => request('name')
    ]);
    //dd("hello");
});

// Route::get('/posts/{post}', function ($post) {
//    // return $post;
//     $posts=[
//         'my-first-post' => 'sah dud',
//         'my-second-post' => '2nd'
//     ];

//     if(!array_key_exists($post,$posts))
//         abort(404,'nincs ilyen post');
//     return view('post',[
//         'post' => $posts[$post] ?? 'nincs'
//     ]);
// });

Route::get('/posts/{post}', [App\Http\Controllers\PostsController::class, 'show']);


Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index']);
Route::get('/projects/create', [App\Http\Controllers\ProjectsController::class, 'create']);
Route::get('/projects/{project}', [App\Http\Controllers\ProjectsController::class, 'show']);
Route::post('/projects', [App\Http\Controllers\ProjectsController::class, 'store']);
Route::get('/projects/{project}/edit',[App\Http\Controllers\ProjectsController::class, 'edit']);
Route::put('/projects/{project}', [App\Http\Controllers\ProjectsController::class, 'update']);
Route::delete('/projects/{project}', [App\Http\Controllers\ProjectsController::class, 'destroy']);

