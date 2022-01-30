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
            @foreach ($post->tags as $tag)
                                
                <div class="mb-1"> <a href="{{ route('tag.index', $tag->id ) }}"> {{$tag->name}} </a></div>
            @endforeach
            <p>
                {{$post->category_id == null ? 'Questo post non ha ancora una categoria' : $post->category->name}}
            </p>

            <div class="img py-5">
                <img src="{{$post->image}}" alt="#">
            </div>
  
        </div>

    </div>

@endsection