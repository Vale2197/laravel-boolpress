@extends('layouts.app')

@section('content')

    <div class="products_index">

        <div class="container">
            <div class="title mb-4 d-flex justify-content-between">
                <h1 class="m-0">
                    OUR PRODUCTS:
                </h1>
            </div>

            <div class="row g-4">

                @foreach ($products as $product)
                
                        <div class="col-3">
                            <div class="card">
                                <img src="https://picsum.photos/200/300" class="img-fluid" alt="#">
                                <div class="card-body">
                                  <h5 class="card-title">{{$product->name}}</h5>
                                  <p class="card-text">{{$product->description}}</p>
                                  <a href="{{route('product.show', $product->id)}}" class="btn btn-primary">&#8364; {{$product->price}}</a>
                                </div>
                            </div>
                        </div>
        
                @endforeach

            </div>

        </div>

    </div>
    
@endsection