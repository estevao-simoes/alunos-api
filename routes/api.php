<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(StudentController::class)->group(function () {
    Route::get('students', 'index')->name('student.list');
    Route::get('student/{student}', 'show')->name('student.show');
    Route::post('student', 'store')->name('student.store');
    Route::delete('student/{student}', 'destroy')->name('student.delete');
    Route::patch('student/{student}', 'update')->name('student.update');
});
