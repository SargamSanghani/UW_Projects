@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 my-4">
        <div class="card">
            <div class="card-header h5 p-3 text-center font-weight-bold">{{$title}}</div>
            <div class="card-body">
                <form action="/admin/creatures/{{ $creature->id }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $creature->id }}" />

                    <p><label for="name">Title<span class="text-danger"> *</span></label><br />
                        <input type="text" name="name" value="{{ old('name', $creature->name) }}" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>

                    <p><label for="image">Image</label><br />
                        @if ($creature->image)
                        <img class="my-2 preview" src="/storage/{{ $creature->image }}" alt="{{ $creature->name }}" /><br />
                        @endif
                        <input type="file" name="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>

                    <p><label for="size">Size<span class="text-danger"> *</span></label><br />
                        <input type="text" name="size" value="{{ old('size', $creature->size) }}" class="form-control">
                        @error('size')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>

                    <p><label for="color">Color<span class="text-danger"> *</span></label><br />
                        <input type="text" name="color" value="{{ old('color', $creature->color) }}" class="form-control">
                        @error('color')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>

                    <p><label for="lifespan">Lifespan<span class="text-danger"> *</span></label><br />
                        <input type="text" name="lifespan" value="{{ old('lifespan', $creature->lifespan) }}" class="form-control">
                        @error('lifespan')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>

                    <p><label for="description">Description<span class="text-danger"> *</span></label><br />
                        <textarea type="text" name="description" class="form-control" rows="4">{{ old('description', $creature->description) }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </p>
                    <p><input type="submit" class="btn btn-primary" /></p>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection