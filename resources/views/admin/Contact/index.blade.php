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
                            <strong> SUBJECT </strong> 
                        </td>
                        {{-- /series --}}
    
                        <td>
                            <strong> MAIL </strong> 
                        </td>
                        {{-- /price --}}

                        <td>
                            <strong> SENDED AT </strong>
                        </td>
                        {{-- /desc --}}

                        <td>
                            <strong> ACTIONS </strong>
                        </td>
                        {{-- /action --}}
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                {{$contact->id}}
                            </td>
                            {{-- /id --}}
    
                            <td>
                                {{$contact->name}}
                            </td>
                            {{-- /title --}}
    
                            
                            <td>
                                {{$contact->subject}}
                            </td>
                            {{-- /price --}}
                            
                            <td>
                                {{$contact->mail}}
                            </td>

                            <td>
                                {{$contact->created_at}}
                            </td>
                            {{-- /description --}}

            
                            <td class="d-flex">
                                <a href="{{route('contact.show', $contact->id)}}"> <i class="fas fa-eye"></i> </a>

                                <form action="{{route('contact.destroy', $contact->id)}}" method="post">
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