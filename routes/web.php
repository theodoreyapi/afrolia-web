<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    $condition = DB::table('about')->first();
    return view('about', compact('condition'));
});
Route::get('condition', function () {
    $condition = DB::table('condition')->first();
    return view('condition', compact('condition'));
});
Route::get('security', function () {
    $condition = DB::table('politicy')->first();
    return view('security', compact('condition'));
});

Route::get('trouver-coiffeuse', function () {
    return view('trouver-coiffeuse');
});
Route::get('comment-ca-marche', function () {
    return view('comment-ca-marche');
});
Route::get('tarifs-clientes', function () {
    return view('tarifs-clientes');
});
Route::get('faq-clientes', function () {
    return view('faq-clientes');
});

Route::get('devenir-coiffeuse', function () {
    return view('devenir-coiffeuse');
});
Route::get('avantages-coiffeuses', function () {
    return view('avantages-coiffeuses');
});
Route::get('tarification-coiffeuses', function () {
    return view('tarification-coiffeuses');
});
Route::get('support-coiffeuses', function () {
    return view('support-coiffeuses');
});

Route::get('blog', function () {
    return view('blog');
},);
Route::get('carrieres', function () {
    return view('carrieres');
});
Route::get('contact', function () {
    return view('contact');
});
