@extends('layouts.app')

@section('title','一覧画面')
@section('content')  

        <ul>
            @foreach ($restaurants as $restaurant)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('layouts.restaurant',compact('restaurant'))
                    
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {{ $restaurants->links() }}

        </div>
    
@endsection
