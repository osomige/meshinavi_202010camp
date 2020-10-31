@extends('layouts.app')

@section('title','一覧画面')
@section('content')  

        <ul>
            @foreach ($restaurants as $restaurant)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    <a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
                </li>
            @endforeach
        </ul>
    
@endsection
