<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
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
//oute::get('/download-resume', function() {
    //$filePath = public_path('downloads/MarkLouieAbayhon_Resume.pdf');
    
    //if(file_exists($filePath)) {
     //   return response()->download($filePath);
    //}
   // return abort(404, 'File not found');
//})->name('download.resume');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');


//use App\Http\Controllers\DownloadController;

//Route::get('/download-resume', [DownloadController::class, 'resume'])->name('download.resume');
// Add routes for other pages
Route::get('/download-resume', [ResumeController::class, 'download'])->name('download.resume');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
