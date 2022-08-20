@extends('layouts/main')

@section('content')
    <div class="row">
        <div class="col-8 offset-md-2">
            <h1>{{ $title }}</h1>
            @auth
                <p>You are authenticated</p>
            @else
                <p>You are a guest</p>
            @endauth

            @guest
                <p>Why not register?</p>
            @else
                <p>We are glad you registered!<p>
            @endguest
        </div>
    </div>
@endsection
