@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/web_developer.svg" alt="">
        <div class="title m-b-md">
            Tratnjek
        </div>

        @foreach ($services as $service)
        <div>
           <h1>{{ $service->service }}</h1>
            <p>{{ $service->description}}</p>
            <h2>{{ $service->price}}</h2>  
        </div>
         @endforeach

    </div>
</div>
    
@endsection
