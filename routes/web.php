<?php

use App\Http\controllers\BiodataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[Homecontroller::class,'showgreating']);

Route::get('/biodata', function () {
    $data=[
        'nama'=> 'MUhammad Rifqi',
        'lahir'=> 'Bandung, 6 februari 2004',
        'hobi' => 'tidur',
        'jk' => 'Laki - Laki',
        'agama' => 'islam',
        'alamat' => 'jl dahlia no 25 ',
        'telp' => '08952554096',
        'email' => 'rm16123@gmail.com ',
        'photo' => '../img/yyy.jpg'
    ];
     return view('/biodata', $data);
});

Route::get('/list',[BiodataController::class,'index']);