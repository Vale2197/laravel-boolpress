@extends('layouts.app')

@section('content')
    
    <div class="product_show">

        <div class="container">
            <h1>
                {{$product->name}}
            </h1>

            <div class="img py-5">

                <img src="https://picsum.photos/200/300" alt="#">
            </div>

            <button class="btn btn-primary">
                &#8364; {{$product->price}}
            </button>
            
        </div>

    </div>

@endsection