@extends('layouts/header')

@section('content')
<h2 class="text-center h3 m-4">{{$data->name}}</h2>

<div class="row m-0">

    <div class="col-md-3"></div>

    <div class="col-md-6">

        <img class="card-img-top detail-img" src="/images/{{$data->image}}" alt="{{$data->name}}">

        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Size</th>
                    <td>{{$data->size}}</td>
                </tr>
                <tr>
                    <th scope="row">Color</th>
                    <td>{{$data->color}}</td>
                </tr>
                <tr>
                    <th scope="row">Life Span</th>
                    <td>{{$data->lifespan}}</td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td>{!!$data->description!!}</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-md-3"></div>
</div>
@endsection