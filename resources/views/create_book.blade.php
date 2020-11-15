<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $hello }}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('store.book') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="author" placeholder="Author">
    <input type="text" name="genre" placeholder="genre">
    <input type="text" name="publisher" placeholder="publisher">
    <input type="submit" name="submit" >
</form>

{{-- @if (auth()->user()->type === 'librarian')
<table>
    <tr>
        <th>
            name
        </th>
        <th>
            author
        </th>
        <th>
            genre
        </th>
        <th>
            publisher
        </th>
    </tr>
    @foreach ($books as $book)
        <tr>
        <td>{{ $book->name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->genre }}</td>
        <td>{{ $book->publisher }}</td>
            </tr>
    @endforeach
</table>
@endif --}}

</body>
</html>
