<html>
<h1>List of news</h1>
<ul>
    @foreach ($news as $new)
        <li> {{ $new->title }} - {{ $new->description }} </li>
    @endforeach
</ul>
</html>