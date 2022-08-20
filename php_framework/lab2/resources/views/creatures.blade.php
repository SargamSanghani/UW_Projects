@extends('layouts/header')

@section('content')
<h2 class="text-center m-4 h3">Creatures</h2>

<div class="row m-0">

    <div class="col-md-3"></div>

    <div class="col-md-6">

        <div class="row">
            @foreach($creatures as $creature)
            <div class="col-md-6">
                <div class="card m-3">
                    <img class="card-img-top thumbnail" src="/images/{{$creature->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$creature->name}}</h5>
                        <p class="card-text ellipsis-3">{!!$creature->description!!}</p>
                        <a href="creatures/{{$creature->id}}" class="btn bg-blue text-white font-weight-bold my-2 px-3 py-2">View
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection