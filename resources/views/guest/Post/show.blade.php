@extends('layouts.app')

@section('content')
    
    <div class="post_show">

        <div class="container">
            <h1>
                {{$post->title}}
            </h1>

            <h3>
                {{$post->subtitle}}
            </h3>

            <p>
                {{$post->category_id == null ? 'Questo post non ha ancora una categoria' : $post->category->name}}
            </p>

            <div class="img py-5">
                <img src="{{$post->image}}" alt="#">
            </div>
  
        </div>

    </div>

@endsection