@extends('layouts.app')

@section('content')

    <div class="admin_edit">

        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('post.update', $post->id)}}" method="post">
                @method('PUT')
                @csrf
    
                <div class="mb-3">
    
                  <label for="title" class="form-label fw-bold fs-4">title*:</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$post->title}}" aria-describedby="helpId">
                  {{-- // TITLE --}}

                  <label for="subtitle" class="form-label fw-bold fs-4">subtitle:</label>
                  <input type="text" name="subtitle" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror"  value="{{$post->subtitle}}" aria-describedby="helpId">
                  {{-- // SERIES --}}

                  <label for="description" class="form-label fw-bold fs-4">description:</label>
                  <textarea type="text-area" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId">
                    {{$post->description}}
                  </textarea>
                  {{-- // image --}}

                  <label for="image" class="form-label fw-bold fs-4">image:</label>
                  <input type="text" name="image" id="image"  class="form-control @error('image') is-invalid @enderror"  value="{{$post->image}}" aria-describedby="helpId">
                  {{-- // URL IMAGE --}}

                  <label for="category_id" class="form-label fw-bold fs-4">category: </label>
                  <select name="category_id" id="category_id">
                            <option value="">
                                no category
                            </option>
                      @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                      @endforeach
                  </select>

                  <button type="submit" class="btn btn-warning mt-3 fw-bold">Update</button>
                </div>
                
            </form>

        </div>

    </div>
    
@endsection