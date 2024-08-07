<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\admin;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',['title' => 'Selamat Datang di BP3IP']);
})->middleware(AuthMiddleware::class);

Route::get('/bidang', function () {
    return view('bidang',[
        'title' => 'Bidang', 
        'posts' => [
            [
                'title' => 'BIDANG PENYELENGGARAAN',
                'author' => 'BP3IP',
                'body' => 'SOP BALAI BESAR PENDIDIKAN PENYEGARAN DAN PENINGKATAN ILMU PELAYARAN (BP3IP) JAKARTA'
            ],
            [
                'title' => '⁠BAGIAN KEUANGAN DAN UMUM',
                'author' => 'BP3IP',
                'body' => 'SOP BALAI BESAR PENDIDIKAN PENYEGARAN DAN PENINGKATAN ILMU PELAYARAN (BP3IP) JAKARTA'
            ],
            [
                'title' => '⁠BIDANG SUMBER DAYA',
                'author' => 'BP3IP',
                'body' => 'SOP BALAI BESAR PENDIDIKAN PENYEGARAN DAN PENINGKATAN ILMU PELAYARAN (BP3IP) JAKARTA'
            ],
            [
                'title' => 'BIDANG USAHA',
                'author' => 'BP3IP',
                'body' => 'SOP BALAI BESAR PENDIDIKAN PENYEGARAN DAN PENINGKATAN ILMU PELAYARAN (BP3IP) JAKARTA'
            ]
        ]
    ]);
})->middleware(AuthMiddleware::class);     //middleware



Route::get('/about', function () {
    return view('about',['title' => 'Visi & Misi']);
})->middleware(AuthMiddleware::class);

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
})->middleware(AuthMiddleware::class); 

Route::get('/pdf', function () {
    return view('pdf',['title' => 'Preview SOP']);
})->middleware(AuthMiddleware::class);

Route::get('/',[SigninController::class,'halamanlogin'])->name('signin');

Route::post('/postlogin',[SigninController::class,'postlogin'])->name('postlogin');

Route::get('/admin', [admin::class, 'home'])
    ->name('admin')->middleware(AuthMiddleware::class);

Route::post('/admin/upload/proses', [admin::class, 'upload'])
    ->name('admin')->middleware(AuthMiddleware::class);

Route::get('/admin/upload', function () {
    return view('admin.uploadPage',['title' => 'Contact Page']);
    })->middleware(AuthMiddleware::class); 

//Route file upload dan download

Route::get('/files', [FileController::class, 'index'])
    ->name('files.index')->middleware(AuthMiddleware::class);

Route::get('/files/create', [FileController::class, 'create'])
    ->name('files.create')->middleware(AuthMiddleware::class);

Route::post('/files/store', [FileController::class, 'store'])
    ->name('files.store')->middleware(AuthMiddleware::class);

Route::get('/files/{file}/download', [FileController::class, 'download'])
    ->name('files.download')->middleware(AuthMiddleware::class);

