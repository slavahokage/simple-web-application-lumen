<html>
<h1>List of blogs</h1>
<ul>
    @foreach ($blogs as $blog)
        <li> {{ $blog->title }} - {{ $blog->description }} </li>
    @endforeach
</ul>
</html>