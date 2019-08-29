<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>List of blogs</h1>
<ul>
    @foreach ($blogs as $blog)
        <li> {{ $blog->title }} - {{ $blog->description }} </li>
    @endforeach
</ul>

{{ $blogs->links() }}
</html>