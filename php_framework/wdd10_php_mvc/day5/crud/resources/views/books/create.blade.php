<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>

<h1>Create a new Book</h1>

<form enctype="multipart/form-data" action="/books" method="post">
    @csrf 
    <p><label for="title">Title</label><br />
    <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="image">Image</label><br />
    <input type="file" name="image">
        @error('image')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="year_published">Year Published</label><br />
    <input type="text" name="year_published" value="{{ old('year_published') }}">
    @error('year_published')
                <span style="color: #900">{{ $message }}</span>
        @enderror
    </p>

    <p><label for="num_pages">Number of Pages</label><br />
    <input type="text" name="num_pages" value="{{ old('num_pages') }}">
    @error('num_pages')
            <span style="color: #900">{{ $message }}</span>
    @enderror
    </p>

    <p><label for="price">Price</label><br />
    <input type="text" name="price" value="{{ old('price') }}">
    @error('price')
        <span style="color: #900">{{ $message }}</span>
    @enderror
    </p>

    <p><label for="in_print">In Print</label><br />
    @if(old('in_print') == 'yes')
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