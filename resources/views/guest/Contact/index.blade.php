@extends('layouts.app')

@section('content')
    
    <div class="container">
        @if (isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        @if (\Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('message') !!}</li>
                </ul>
            </div>
        @endif
        
        <form action="{{route('contact.mail')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">NAME:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="your name" aria-describedby="helpId"
                value="{{old('name')}}"
                >
                <small id="helpId" class="text-muted">your name</small>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">E-MAIL:</label>
                <input type="text" name="mail" id="mail" class="form-control" placeholder="your mail" aria-describedby="helpId"
                value="{{old('mail')}}"
                >
                <small id="helpId" class="text-muted">your mail</small>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">SUBJECT:</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="your subject" aria-describedby="helpId"
                value="{{old('subject')}}"
                >
                <small id="helpId" class="text-muted">your subject</small>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">MESSAGE:</label> <br>
                <textarea name="message" id="message" cols="80" rows="10">
                    {{old('message')}}
                </textarea> <br>
                <small id="helpId" class="text-muted">your message</small>
            </div>

            <button type="submit" class="btn btn-success">
                SEND
            </button>
        </form>

    </div>

@endsection