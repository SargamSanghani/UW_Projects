<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>

<h1>Edit a Book</h1>

<form enctype="multipart/form-data"  action="/books/{{ $book->id }}" method="post">
    @csrf 
    @method('PUT')
    <input type="hidden" name="id" value="{{ $book->id }}" />

    <p><label for="title">Title</label><br />
    <input type="text" name="title" value="{{ old('title', $book->title) }}">
        @error('title')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="image">Image</label><br />
    @if($book->image)
    <img src="/storage/{{ $book->image }}" alt="{{ $book->title }}" 
            style="height: 100px;width:auto"/><br />
    @endif
    <input type="file" name="image">
        @error('image')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="year_published">Year Published</label><br />
    <input type="text" name="year_published" 
            value="{{ old('year_published', $book->year_published) }}">
    @error('year_published')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="num_pages">Number of Pages</label><br />
    <input type="text" name="num_pages" 
        value="{{ old('num_pages', $book->num_pages) }}">
    @error('num_pages')
            <span style="color: #900">{{ $message }}</span>
    @enderror
    </p>

    <p><label for="price">Price</label><br />
    <input type="text" name="price" value="{{ old('price', $book->price) }}">
    @error('price')
        <span style="color: #900">{{ $message }}</span>
    @enderror
    </p>

    <p><label for="in_print">In Print</label><br />
    @if(old('in_print', $book->in_print) == 'yes')
    <input checked name="in_print" type="radio" value="yes"> In Print
    <input name="in_print" type="radio" value="no"> Not In Print
    @else
    <input name="in_print" type="radio" value="yes"> In Print
    <input checked name="in_print" type="radio" value="no"> Not In Print
    @endif
    @error('in_print')
        <span style="color: #900">{{ $message }}</span>
    @enderror
    </p>

    <p><input type="submit" /></p>

    
</form>
    
</body>
</html>