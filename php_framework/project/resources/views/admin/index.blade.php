@extends('layouts.admin')

@section('content')
<div class="row justify-content-center m-0">
    <div class="col-md-6 my-4">
        <div class="card">
            <div class="card-header h5 p-3 text-center font-weight-bold">
                Creatures
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="m-0"><a class="btn btn-success" href="/admin/creatures/create">Add Creatures</a></p>

                    <form action="/admin/creatures" method="get" autocomplete="off" novalidate>
                        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
                        <input type="submit" hidden value="search" />
                    </form>

                </div>
            </div>

            <table class="table table-striped">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="w-25">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col" class="w-25">Actions</th>
                </tr>
                @foreach ($creatures as $creature)
                <tr>
                    <td scope="row">{{ $creature->id }}</td>
                    <td><img class="thumbnail" src="/storage/{{ $creature->image }}" alt="{{ $creature->name }}"></td>
                    <td>{{ $creature->name }}</td>
                    <td>
                        <div class="d-flex">

                            <a href="{{ route('edit', ['creature' => $creature->id]) }}" class="text-decoration-none text-white bg-primary px-3 py-2 tiny-border d-block mr-2">Edit</a>

                            <form method="post" action="/admin/creatures/{{ $creature->id }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $creature->id }}" />
                                <button class="text-white bg-danger px-2 py-2 border-0 tiny-border" onclick="return confirm('Do you really want to delete {{ $creature->name }}?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>
            <div class="">
                {!! $creatures->links('pagination::bootstrap-5') !!}
            </div>
        </div>

    </div>
</div>
</div>
@endsection