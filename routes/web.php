<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.index',["name"=>"Avash"]);
});
Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/teas',function(){
    $teas = [
        ["name"=> "Masala Chai", "price"=>"100","id"=>1],
        ["name"=> "Lemon Chai", "price"=>"80","id"=>2],
        ["name"=> "Assam Chai", "price"=>"200","id"=>3],
    ];

    return view('teas.index',["teas"=>$teas]);
});
Route::get('/teas/{id}',function($id){
    $teas = [
        ["name"=> "Masala Chai", "price"=>"100","id"=>1],
        ["name"=> "Lemon Chai", "price"=>"80","id"=>2],
        ["name"=> "Assam Chai", "price"=>"200","id"=>3],
    ];

    return view('teas.teadetail',["tea"=>$teas[$id-1]]);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/messages',[ContactController::class, 'index'])->name('message.index');