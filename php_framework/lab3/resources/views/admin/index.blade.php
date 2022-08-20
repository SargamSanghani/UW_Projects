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
            max-width: 75px;
            height: auto;
        }
    </style>

</head>

<body>
    @include('admin.partials.nav')

    @if(session()->has('success'))
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
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <!-- <th scope="col">Content</th> -->
                            <!-- <th scope="col">Category #</th> -->
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td scope="row">{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td><img class="thumbnail" src="{{$post->image}}" alt=""></td>
                            <!-- <td>{{$post->content}}</td> -->
                            <!-- <td>{{$post->category_id}}</td> -->
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