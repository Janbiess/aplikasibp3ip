<?php


use App\Http\Controllers\SigninController;
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
})->middleware(AuthMiddleware::class);



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


