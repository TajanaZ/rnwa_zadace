<?php

Route::get('index.php', function () {
    IndexController::CreateView('IndexView');
});

Route::get('brands', [BrandController::class, 'index']);
Route::get('brands_create', [BrandController::class, 'create']);
Route::get('brands_edit', [BrandController::class, 'edit']);

Route::post('brands', [BrandController::class, 'store']);

Route::put('brands_update', [BrandController::class, 'update']);

Route::delete('brands_delete', [BrandController::class, 'delete']);

Route::get('brands', [CategoryController::class, 'index']);
Route::get('categories_create', [CategoryController::class, 'create']);
Route::get('categories_edit', [CategoryController::class, 'edit']);

Route::post('brands', [CategoryController::class, 'store']);

Route::put('categories_update', [CategoryController::class, 'update']);

Route::delete('categories_delete', [CategoryController::class, 'delete']);



