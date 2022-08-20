<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>

@if(session()->has('success'))
<div style="line-height: 50px; background: lightgreen; color: darkgreen; text-align: center">
    {{ session('success') }}
</div>
@endif
    <h1>Books</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Year Published</th>
            <th>Number of Pages</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->year_published }}</td>
            <td>{{ $book->num_pages }}</td>
            <td><form method="post" action="/books/{{ $book->id }}">
                @csrf 
                @method("DELETE")
                <input type="hidden" name="id" value="{{ $book->id }}" />
                <button onclick="return confirm('Really delete this?')"
                style="padding:6px;background:darkred;color:white;border:1px solid white;border-radius: 5px`">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>