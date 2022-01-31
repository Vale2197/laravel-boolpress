@extends('layouts.app')
    

@section('content')
    
    <div class="admin_dash">

        <div class="container">

            <button class="btn btn-success">
                <a style="text-decoration: none; color: white;" href="{{route('post.create')}}">
                    create Post
                </a>
            </button>

            <table>


                <thead>
                    <tr>
                        <td>
                            <strong> ID </strong> 
                        </td>
                        {{-- /id --}}
    
                        <td>
                            <strong> TITLE </strong> 
                        </td>
                        {{-- /title --}}
    
                        <td>
                            <strong> SUBTITLE </strong> 
                        </td>
                        {{-- /series --}}
    
                        <td>
                            <strong> IMAGE </strong> 
                        </td>
                        {{-- /price --}}

                        <td>
                            <strong> DESCRIPTION </strong>
                        </td>
                        {{-- /desc --}}

                        <td>
                            <strong> CATEGORY </strong>
                        </td>
                        {{-- /desc --}}

                        <td>
                            <strong> ACTIONS </strong>
                        </td>
                        {{-- /action --}}
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{$post->id}}
                            </td>
                            {{-- /id --}}
    
                            <td>
                                {{$post->title}}
                            </td>
                            {{-- /title --}}
    
                            
                            <td>
                                {{$post->subtitle}}
                            </td>
                            {{-- /price --}}
                            
                            <td>
                                <img style="width: 100px; height: 100px; object-fit:cover;" src="{{asset('storage/' . $post->image)}}" alt="#">
                            </td>
                            {{-- /series --}}

                            <td>
                                {{$post->description == null ? 'null' : $post->description}}
                            </td>
                            {{-- /description --}}

                            
                            <td>
                                {{$post->category_id == null ? 'null' : $post->category->name}}
                            </td>
                            {{-- /description --}}

                            <td class="d-flex">
                                <a href="{{route('post.edit', $post->id)}}"> <i class="far fa-edit"></i> </a>
                                <a href="{{route('post.show', $post->id)}}"> <i class="fas fa-eye"></i> </a>

                                <form action="{{route('post.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>

                            </td>
                            {{-- /price --}}
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>

        </div>

    </div>

@endsection