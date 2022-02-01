@extends('layouts.app')

@section('content')
    
    <div class="product_show">

        <div class="container">
            <h1>
                {{$contact->name}}
            </h1>

            <h3>
                {{$contact->subject}}
            </h3>

           <p>
               {{$contact->message}}
           </p>
            
        </div>

    </div>

@endsection