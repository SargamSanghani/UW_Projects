@extends('layouts/main')

@section('content')
<div class="row">
    <div class="col-4 offset-md-4">
        <div class="card">
            <div class="card-header">
            <h1>{{ $title }}</h1>
            </div>
            <div class="card-body">
            <form action="/register" method="post">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your name</label>
                <input type="text" name="name"class="form-control"  value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
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
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirm" class="form-control" id="password_confirm">
                @error('password_confirm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection