@extends('layouts.app')

@section('content')

    <div class="products_index">

        <div class="container">
            <div class="title mb-4 d-flex justify-content-between">
                <h1 class="m-0">
                    News:
                </h1>
            </div>

            <div class="row g-4">

                @foreach ($posts as $post)
                
                        <div class="col-3">
                            <a style="text-decoration: none; color: black;" href="{{route('post.show', $post->id)}}">
                                <div class="card">
                                    <img src="{{$post->image}}" class="img-fluid" alt="#">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$post->title}}</h5>
                                      <p class="card-text">{{$post->subtitle}}</p>
                                      <p> {{$post->description}}</p>
                                    </div>
                                </div>
                            
                            </a>
                        </div>
        
                @endforeach

            </div>

        </div>

    </div>
    
@endsection