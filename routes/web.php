<?php

    use App\Http\Controllers\Admin\Catalogue;
    use App\Http\Controllers\Admin\CatalogueController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Middleware\CheckAdminMiddleware;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

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

    Route::get('/admin', function () {
        return "Day la trang chu";
    }
    )->middleware(CheckAdminMiddleware::class);

    //    Auth::routes();
    Route::get('auth/login', [LoginController::class, 'showFormLogin'])
        ->name('login');
    Route::post('auth/login', [LoginController::class, 'login']);
    Route::post('auth/logout', [LoginController::class, 'logout'])
        ->name('logout');

    Route::get('auth/register', [RegisterController::class, 'showFormRegister'])
        ->name('register');
    Route::post('auth/register', [RegisterController::class, 'register']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');
