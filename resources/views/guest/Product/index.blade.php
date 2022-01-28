@extends('layouts.app')

@section('content')

    <div class="products_index">

        <div class="position-relative overflow-hidden p-3 p-md-5 m-0 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">OUR PRODUCTS</h1>
                <p class="lead fw-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ab labore vitae quibusdam pariatur alias nihil doloribus distinctio veniam tempora dicta. Commodi incidunt quidem perferendis harum, at assumenda. Expedita, nihil?
                </p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block">
                <img style=" width: 100%;
                height: 100%;
                object-fit: contain;" src="https://picsum.photos/200/300" alt="#"
                >
            </div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block">
                <img style=" width: 100%;
                height: 100%;
                object-fit: contain;" src="https://picsum.photos/200/300" alt="#"
                >
            </div>
        </div>
        
        @foreach ($products as $product)
            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">{{$product->name}}</h2>
                        <p class="lead">{{$product->description}}</p>
                        <a style="color: white" href="{{route('product.show', $product->id)}}" class="btn btn-primary">&#8364; {{$product->price}}</a>
                    </div>
                    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                        <img style=" width: 100%;
                        height: 100%;
                        object-fit: cover;" src="https://picsum.photos/700/300" alt="#"
                        >
                    </div>
                </div>
            </div>
        @endforeach

        <div class="my_pagination">
            {{$products->links()}}
        </div>
               
    </div>    
@endsection

       {{--  <div class="container">
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
 --}}