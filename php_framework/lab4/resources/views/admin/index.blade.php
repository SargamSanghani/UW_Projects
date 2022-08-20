<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="/css/app.css" rel="stylesheet" />
    <style>
        .thumbnail {
            width: 75px;
            height: 50px;
            object-fit: cover;
        }
    </style>

</head>

<body>
    @include('admin.partials.nav')

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6 my-4">
            <div class="card">
                <div class="card-header h5 p-3 text-center font-weight-bold">
                    Posts
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Title</th>
                            <th scope="col">Image</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td><img class="thumbnail" src="/storage/{{ $post->image }}"
                                        alt="{{ $post->title }}"></td>
                                <td>
                                    <div class="d-flex">

                                        <a href="{{ route('edit', ['post' => $post->id]) }}"
                                            class="text-decoration-none text-white bg-primary px-3 py-2">Edit</a>

                                        <form method="post" action="/admin/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $post->id }}" />
                                            <button class="text-white bg-danger px-2 py-2 border-0"
                                                onclick="return confirm('Do you really want to delete {{ $post->title }}?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    <div class="">
                        {!! $posts->links('pagination::bootstrap-5') !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
