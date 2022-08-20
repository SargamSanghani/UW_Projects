@extends('layouts/main')

@section('content')
<div class="row">
    <div class="col-4 offset-md-4">
        <div class="card">
            <div class="card-header">
            <h1>{{ $title }}</h1>
            </div>
            <div class="card-body">
            <form action="/login" method="post">
                @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email"class="form-control" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection