@extends('layouts/app')

@section('content')

<div class="row justify-content-center">
<div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card mb-4">

    <h1>Add a new Post</h1>

    <form enctype="multipart/form-data" method="post" action="/admin/posts">

    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" />
        @error('title')<span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" />
        @error('image')<span class="text-danger">{{ $message }}</span>@enderror
        
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control"></textarea>
        @error('content')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" >
            <option value="">Select a Cateogry</option>\
            @foreach($cats as $id => $name)
                <option @if($id == old('id')) selected @endif value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        @foreach($tags as $tag)
        <input @if(in_array($tag->id, old('tags', []))) checked @endif type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{$tag->name}}&nbsp;&nbsp;
        @endforeach
        @error('tags') {{ $message }} @enderror
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>

    </form>

    </div>
</div>
</div>

@endsection