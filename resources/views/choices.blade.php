@extends('layouts.app')

@section('content')


<div class="container-lg" style= "margin:0 auto;">
    <div class= "row at -5">
        @foreach($response as $currency)
        <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
            <div class="card" style="width: 7rem;">
                <img src="{{$currency['logo_url']}}" style="width: 75px; margin: 10px auto;">
                <div class="card-body">
                    <div class="card-title"> {{$currency['currency']}}</div>
                    <div class="card-text" style="margin: 5px;"> Name: {{$currency['name']}}</div>
                    <div class="card-text" style="margin: 5px;"> Price: &#36; {{$currency['price']}}</div>
                    <div class="card-text" style="margin: 5px;"> Circulating Supply: {{$currency['circulating_supply']}}</div>
                    <div class="card-text" style="margin: 5px;"> Market Cap: {{$currency['market_cap']}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>