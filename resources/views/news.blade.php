<html>
<h1>List of news</h1>
<ul>
    @foreach ($news as $new)
        <form method="post" action="/news/delete">
                <li> {{ $new->title }} - {{ $new->description }} </li>
                <button name="id" value="{{ $new->id }}" type="submit">delete</button>
        </form>
    @endforeach
</ul>
</html>