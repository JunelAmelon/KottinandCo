<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController; // Ajout de la ligne pour importer le ContactController
use Illuminate\Support\Facades\Route;

// Pages principales
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/a-propos', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit'); // Ajout de la route pour la soumission du formulaire de contact

// Routes des expertises
Route::prefix('expertise')->group(function () {
    Route::get('/droit-des-affaires', function () {
        return view('pages.expertise-droit-affaires');
    })->name('expertise.droit-affaires');

    Route::get('/entreprises-en-difficulte', function () {
        return view('pages.expertise-entreprises-difficulte');
    })->name('expertise.entreprises-difficulte');

    Route::get('/contentieux-des-affaires', function () {
        return view('pages.expertise-contentieux-affaires');
    })->name('expertise.contentieux-affaires');

    Route::get('/droit-penal-des-affaires', function () {
        return view('pages.expertise-penal-affaires');
    })->name('expertise.penal-affaires');
});

// Routes du blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Routes d'authentification
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Routes d'administration
Route::group(['middleware' => ['web', 'auth', \App\Http\Middleware\AdminMiddleware::class]], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('articles', ArticleController::class);
        Route::post('upload/image', [UploadController::class, 'image'])->name('upload.image');
    });
});

require __DIR__.'/auth.php';
