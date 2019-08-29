<html>
<form method="get" action="/posts">
    <p><b>Enter beginning of post name</b></p>
    <input name="postName">
    <p><input type="submit" value="Get posts"></p>
    <h1>Posts: </h1>
    @foreach ($posts as $post)
        <li> {{ $post->name }} - {{ $post->description }} </li>
    @endforeach
</form>
</html>