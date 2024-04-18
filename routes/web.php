<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\FilesBasedOnCategoryController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/{arrays}', [FilesBasedOnCategoryController::class, 'getFilesUnderCategory'])->name('arrays.show');
Route::get('/{strings}', [FilesBasedOnCategoryController::class, 'getFilesUnderCategory'])->name('strings.show');
Route::get('/{utilities}', [FilesBasedOnCategoryController::class, 'getFilesUnderCategory'])->name('utilities.show');
Route::get('/{functions}', [FilesBasedOnCategoryController::class, 'getFilesUnderCategory'])->name('functions.show');

Route::get('/{category}/{title}', [ScriptController::class, 'showScriptResult'])->name('script.result');


Route::fallback(function () {
    abort(404);
});