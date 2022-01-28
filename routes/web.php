<?php

use App\Http\Controllers\CryptoController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [CryptoController::class, 'getData']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/template', function () {
    return view('app');
});
Route::get('/about', function () {
    return view('about');
});

//https://api.nomics.com/v1/markets?key=m_8042d8cf8a15a3a98314889e744b102ece40904d
//curl "https://api.nomics.com/v1/currencies/ticker?key=m_8042d8cf8a15a3a98314889e744b102ece40904d&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"