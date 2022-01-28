<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    //

    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/markets?key=m_8042d8cf8a15a3a98314889e744b102ece40904d&per-page=10&page=1&convert=INR");
        return view('index', ['response' => $response->json()]);
    }
}
