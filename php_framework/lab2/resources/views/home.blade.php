@extends('layouts/header')

@section('content')
<div class="text-center">
    <h1 class="m-4 h2">{{$title}}</h1>
    <div>
        <img src="/images/bg.jpg" class="" alt="Underwater sea">
    </div>

    <a href="creatures" class="btn bg-blue text-white font-weight-bold m-3 p-3">Let's dive in
    </a>
</div>
@endsection