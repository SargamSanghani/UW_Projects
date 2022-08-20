<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <h1>{{$title}}</h1>

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
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->year_published}}</td>
            <td>{{$book->num_pages}}</td>
            <td>
                <form action="/books/{{$book->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <button type="submit" style="padding: 6px; background:#900; color:white; border:1px solid" onclick="return confirm('Seriously?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>