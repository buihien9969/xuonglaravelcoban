<?php

    use App\Http\Controllers\Admin\CatalogueController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->as('admin.')->group(function () {
        Route::prefix('catalogue')
            ->as('catalogue.')
            ->group(function () {
                Route::get('/', function () {
                    return "Day la Dashboard";
                });
                Route::get('/', [CatalogueController::class, 'index'])
                    ->name('index');
                Route::get('create', [CatalogueController::class, 'create'])
                    ->name('create');
                Route::post('store', [CatalogueController::class, 'store'])
                    ->name('store');
                Route::get('show/{id}', [CatalogueController::class, 'show'])
                    ->name('show');
                Route::get('{id}/edit', [CatalogueController::class, 'edit'])
                    ->name('edit');
                Route::put('{id}/update',
                    [CatalogueController::class, 'update'])
                    ->name('update');
                Route::delete('{id}/destroy',
                    [CatalogueController::class, 'destroy'])
                    ->name('destroy');
            });
    });
