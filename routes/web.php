<?php

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
    return view('viewers/home');
});

Route::get('/login', function () {
    return view('viewers/login');
});


//Projects Folder
Route::get('/projects', function () {
    return view('projects/projects');
});

Route::get('/update-project', function () {
    return view('projects/update_project');
});

Route::get('/create-project', function () {
    return view('projects/create_project');
});

//Contact Folder
Route::get('/contact', function () {
    return view('contact/contact');
});

Route::get('/update-contact', function () {
    return view('contact/update_contact');
});

//About Folder
Route::get('/about', function () {
    return view('about/about');
});

Route::get('/update-about', function () {
    return view('about/update_about');
});