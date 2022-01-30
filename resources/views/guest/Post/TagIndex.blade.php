@extends('layouts.app')

@section('content')

    <div class="products_index">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 fst-italic">OUR NEWS</h1>
              <p class="lead my-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, numquam? Quo, illum dolores debitis enim magnam voluptates vel sed ab, ad, totam aperiam molestiae libero eum ipsam! Nostrum, assumenda exercitationem?
              </p>
            </div>
        </div>
        
        <div class="container">
           
            <div class="row mb-2 flex-wrap">

                @foreach ($posts as $post)
                    
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static justify-content-around">
                                <strong class="d-inline-block mb-2 text-primary">
                                    {{$post->category_id == null ? 'No category yet' : $post->category->name}}
                                </strong>
                                <h3 class="mb-0">{{$post->title}}</h3>
                                <div class="mb-1 text-muted">{{$post->subtitle}}</div>

                                @foreach ($post->tags as $tag)
                                
                                    <div class="mb-1"> <a href="{{ route('tag.index', $tag->id ) }}"> {{$tag->name}} </a></div>
                                @endforeach
                            
                                <a href="{{route('post.show', $post->id)}}" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-4 d-none d-lg-block">
                                <img style="width: 100%; height: 100%; object-fit:cover;" src="{{$post->image}}" alt="#">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
        </div> 

    </div>

@endsection






        {{-- <div class="container">
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
 --}}