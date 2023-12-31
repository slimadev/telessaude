<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColeraController;
use App\Http\Controllers\ColeraClinicoController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MalariaController;
use App\Http\Controllers\ProcedimentosController;
use App\Http\Controllers\TuberculoseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/changepassword', function () {
    return view('profile.changepassword');
})->middleware(['auth', 'verified'])->name('changepassword');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/colera', [ColeraController::class, 'index'])->name('colera.start');
    Route::post('/colera', [ColeraController::class, 'store'])->name('colera.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/documents', [DocumentController::class, 'index'])->name('documents.start');
    Route::post('/documents', [DocumentController::class, 'update'])->name('documents.update');
    Route::get('/download/{req}', [DocumentController::class, 'download'])->name('download');
    Route::get('/downloadr/{req}', [DocumentController::class, 'downloadr'])->name('downloadr');
});

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.start');
    Route::post('/users', [UserController::class, 'update'])->name('users.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/colera_clinico', [ColeraClinicoController::class, 'index'])->name('colera_clinico.start');
    Route::post('/colera_clinico', [ColeraClinicoController::class, 'store'])->name('colera_clinico.submit');
    Route::post('/colera_clinico/ajax', [ColeraClinicoController::class, 'store_via_ajax'])->name('colera_clinico.submit_ajax');
});


Route::get('usage_statistics', [DashbordController::class, 'statistic'])
                ->name('usage_statistics');


Route::get('user_statistics', [DashbordController::class, 'users'])
                ->name('user_statistics');    

Route::get('reset', [UserController::class, 'reset'])
                ->name('reset_password');  

Route::post('resetPost', [UserController::class, 'resetPost'])
                ->name('reset_password_p'); 
Route::post("resetPasswordPost", [UserController::class, 'resetPasswordPost'])
            ->name("reset_password_post");
                
Route::get('resetPostMail/{token}/{email}', [UserController::class, 'resetPostMail'])
                ->name('reset_post_mail'); 

Route::get('statistics_dashboard/{year}', [DashbordController::class, 'buildDashboard']);
Route::get('user_statistics_dashboard', [DashbordController::class, 'buildUsersDashboard']);

Route::post('documents_show', [DocumentController::class, 'show'])
                ->name('documents_show');

Route::post('users_show', [UserController::class, 'show'])
                ->name('users_show');

Route::get('/cat/{area_id}', [ProfileController::class, 'cat'])
                ->name('cat');

Route::middleware('auth')->group(function () {
    Route::get('/malaria_calculo', [MalariaController::class, 'calculo'])->name('malaria.calculo');
    Route::post('/malaria_calculo', [MalariaController::class, 'do_calculo'])->name('malaria.do_calculo');
});

Route::middleware('auth')->group(function () {
    Route::get('/malaria_manejo', [MalariaController::class, 'manejo'])->name('malaria.manejo');
    Route::post('/malaria/manejo', [MalariaController::class, 'do_manejo'])->name('malaria.do_manejo');
    Route::get('/malaria_dashboard', [MalariaController::class, 'user_dashboard'])->name('malaria.user_dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/procedimentos', [ProcedimentosController::class, 'procedimentos'])->name('procedimentos');
    Route::get('/preparacao', [ProcedimentosController::class, 'preparacao'])->name('preparacao');
});

Route::middleware('auth')->group(function () {
    Route::get('/tuberculose_manejo_ca', [TuberculoseController::class, 'manejo_ca'])->name('tuberculose.manejo_ca');
    Route::post('/tuberculose_manejo_ca', [TuberculoseController::class, 'do_manejo'])->name('tuberculose.do_manejo_ca');
});

Route::middleware('auth')->group(function () {
    Route::get('/tuberculose_tratamento_curativo', [TuberculoseController::class, 'tratamento_curativo'])->name('tuberculose.tratamento_curativo');
    Route::post('/tuberculose_tratamento_curativo', [TuberculoseController::class, 'do_tratamento_curativo'])->name('tuberculose.do_tratamento_curativo');
});

Route::middleware('auth')->group(function () {
    Route::get('/tuberculose_tratamento_preventivo', [TuberculoseController::class, 'tratamento_preventivo'])->name('tuberculose.tratamento_preventivo');
    Route::get('/tuberculose_dashboard', [TuberculoseController::class, 'user_dashboard'])->name('tuberculose.user_dashboard');
});
                


require __DIR__.'/auth.php';
