<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\EmploymentController;
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

Route::get('/', [MainController::class, 'index']);

// 회사소개
Route::prefix('company')->group(function () {
    Route::get('/', [CompanyController::class, 'index']);
    Route::get('/history', [CompanyController::class, 'history']);
    Route::get('/cooperative', [CompanyController::class, 'cooperative']);
    Route::get('/philosophy', [CompanyController::class, 'philosophy']);
});

// 사업정보
Route::prefix('business')->group(function () {
    Route::get('/', [BusinessController::class, 'index']);
    Route::get('/product', [BusinessController::class, 'product']);
    Route::get('/place', [BusinessController::class, 'place']);
    Route::get('/cooperative', [BusinessController::class, 'cooperative']);
});

// 신승정보
Route::prefix('info')->group(function () {
    Route::get('/notice', [NoticeController::class, 'notice']);
    Route::get('/notice/view/{id}', [NoticeController::class, 'view']);
    Route::get('/info', [InfoController::class, 'list']);
    Route::get('/info/view/{id}', [InfoController::class, 'view']);
    Route::get('/publicity', [InfoController::class, 'publicity']);
});

//인재채용
Route::prefix('employment')->group(function () {
    Route::get('/info', [EmploymentController::class, 'info']);
    Route::get('/apply', [EmploymentController::class, 'apply']);
    Route::get('/recruit', [EmploymentController::class, 'recruit']);
});

// 고객센터
Route::prefix('cs')->group(function () {
    Route::get('/inquire', [CsController::class, 'inquire']);
    Route::get('/suggest', [CsController::class, 'suggest']);
    Route::get('/map', [CsController::class, 'map']);
});
/*
인재채용
 채용정보   이력서 가볍게 근무처,
 지원서제출  이력서 첨부가능, 개인 비밀번호
 인재상
*/ 