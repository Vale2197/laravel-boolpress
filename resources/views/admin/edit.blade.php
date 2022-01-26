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

            <form action="{{route('product.update', $product->id)}}" method="post">
                @method('PUT')
                @csrf
    
                <div class="mb-3">
    
                  <label for="name" class="form-label fw-bold fs-4">name*:</label>
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$product->name}}" aria-describedby="helpId">
                  {{-- // TITLE --}}

                  <label for="description" class="form-label fw-bold fs-4">description:</label>
                  <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"  value="{{$product->description}}" aria-describedby="helpId">
                  {{-- // SERIES --}}

                  <label for="image" class="form-label fw-bold fs-4">image*:</label>
                  <textarea type="text-area" name="image" id="image" class="form-control @error('image') is-invalid @enderror" aria-describedby="helpId">
                    {{$product->image}}
                  </textarea>
                  {{-- // image --}}

                  <label for="price" class="form-label fw-bold fs-4">price*:</label>
                  <input type="text" name="price" id="price"  class="form-control @error('price') is-invalid @enderror"  value="{{$product->price}}" aria-describedby="helpId">
                  {{-- // URL IMAGE --}}

                  <button type="submit" class="btn btn-warning mt-3 fw-bold">Update</button>
                </div>
                
            </form>

        </div>

    </div>
    
@endsection