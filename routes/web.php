<?php

use App\Http\Controllers\UploadFileController;
use App\Models\Files;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::post('/upload', function () {
  $userId = 1;

  $file = Files::where('user_id', $userId)->where('status', 'draft')->latest()->first();

  $error = Validator::make($file ? $file->toArray() : [], [
    'car_photo' => 'required',
    'person_photo' => 'required',
  ]);

  if ($error->fails()) return back()->withErrors($error);

  $file->status = 'pending';

  $file->save();
})->name('upload');

Route::post('/file-upload', [UploadFileController::class, 'store']);