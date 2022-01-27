@extends('layouts.app')
    

@section('content')
    
    <div class="admin_dash">

        <div class="container">

            <table>


                <thead>
                    <tr>
                        <td>
                            <strong> ID </strong> 
                        </td>
                        {{-- /id --}}
    
                        <td>
                            <strong> NAME </strong> 
                        </td>
                        {{-- /title --}}
    
                        <td>
                            <strong> IMAGE </strong> 
                        </td>
                        {{-- /series --}}
    
                        <td>
                            <strong> PRICE </strong> 
                        </td>
                        {{-- /price --}}

                        <td>
                            <strong> DESCRIPTION </strong>
                        </td>
                        {{-- /desc --}}

                        <td>
                            <strong> ACTIONS </strong>
                        </td>
                        {{-- /action --}}
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{$product->id}}
                            </td>
                            {{-- /id --}}
    
                            <td>
                                {{$product->name}}
                            </td>
                            {{-- /title --}}
    
                            <td>
                                <img src="https://picsum.photos/100/100" alt="#">
                            </td>
                            {{-- /series --}}
    
                            <td>
                                {{$product->price}}
                            </td>
                            {{-- /price --}}

                            <td>
                                {{$product->description == null ? 'null' : $product->description}}
                            </td>
                            {{-- /description --}}

                            <td class="d-flex">
                                <a href="{{route('product.edit', $product->id)}}"> <i class="far fa-edit"></i> </a>
                                <a href="{{route('product.show', $product->id)}}"> <i class="fas fa-eye"></i> </a>

                                <form action="{{route('product.destroy', $product->id)}}" method="post">
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