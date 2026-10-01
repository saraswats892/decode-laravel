<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WorkingPaperController;
use App\Http\Controllers\AdvocacyInActionController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/publications',function(){
//      return view('publications');
// });

Route::get('/publications', [PublicationController::class, 'index']);
Route::get('/working-papers', [WorkingPaperController::class, 'index']);
Route::get('/advocacy-in-action',[AdvocacyInActionController::class, 'index']);

Route::get('/nanuk-narratives',function(){
     return view('nanuk-narratives');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/publications', [PublicationController::class, 'adminIndex']);
Route::get('/admin/publicedit/create', [PublicationController::class, 'create']);

Route::get('/admin/publicedit/edit/{id}', [PublicationController::class, 'edit']);
Route::post('/admin/publicedit/store', [PublicationController::class, 'store']);
Route::post('admin/publicedit/update/{id}',[PublicationController::class,'update']);
Route::get('/admin/publicedit/delete/{id}', [PublicationController::class, 'delete']);

Route::get('/admin/working-papers', [WorkingPaperController::class, 'adminIndex']);

Route::get('/admin/workingpapers/create', [WorkingPaperController::class, 'create']);

Route::get('/admin/workingpapers/edit/{id}', [WorkingPaperController::class, 'edit']);

Route::post('/admin/workingpapers/store', [WorkingPaperController::class, 'store']);

Route::post('/admin/workingpapers/update/{id}', [WorkingPaperController::class, 'update']);

Route::get('/admin/workingpapers/delete/{id}', [WorkingPaperController::class, 'delete']);

Route::get('/admin/advocacy-in-actions', [AdvocacyInActionController::class, 'adminIndex']);

Route::get('/admin/advocacy-in-actions/create', [AdvocacyInActionController::class, 'create']);

Route::get('/admin/advocacy-in-actions/edit/{id}', [AdvocacyInActionController::class, 'edit']);

Route::post('/admin/advocacy-in-actions/store', [AdvocacyInActionController::class, 'store']);

Route::post('/admin/advocacy-in-actions/update/{id}', [AdvocacyInActionController::class, 'update']);

Route::get('/admin/advocacy-in-actions/delete/{id}', [AdvocacyInActionController::class, 'delete']);