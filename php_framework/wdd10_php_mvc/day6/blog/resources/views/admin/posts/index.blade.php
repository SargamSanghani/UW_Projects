@extends('layouts/app')

@section('content')
<div class="row justify-content-center">
<div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card mb-4">
        <p><a class="btn btn-success" href="/admin/posts/create">Add Post</a></p>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>created_at</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>

@endsection