<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="/css/app.css" rel="stylesheet" />

</head>

<body>

    @include('admin.partials.nav')

    <div class="row justify-content-center">
        <div class="col-md-6 my-4">
            <div class="card">
                <div class="card-header h5 p-3 text-center font-weight-bold">Create Post</div>
                <div class="card-body">
                    <form action="/admin/posts" enctype="multipart/form-data" method="post">
                        @csrf
                        <p><label for="title">Title<span class="text-danger"> *</span></label><br />
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>

                        <p><label for="image">Image</label><br />
                            <input type="file" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>

                        <p><label for="content">Content<span class="text-danger"> *</span></label><br />
                            <textarea type="text" name="content" class="form-control" rows="4">{{ old('content') }}</textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>

                        <p><label for="category_id">Category<span class="text-danger"> *</span></label><br />
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Please select any category</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}"
                                        {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </p>
                        <p><input type="submit" class="btn btn-primary" /></p>


                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
