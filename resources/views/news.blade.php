<html>
<h1>List of news</h1>
<ul>
        @if(isset($message))
                <h1 style="color: coral">{{ $message }}</h1>
        @endif
        @foreach ($news as $new)
                <form method="post" action="/news/delete">
                        <input type="hidden" name="_token" value="{{ app('request')->session()->get('_token') }}">
                        <li> {{ $new->title }} - {{ $new->description }} </li>
                        <button name="id" value="{{ $new->id }}" type="submit">delete</button>
                </form>
        @endforeach
</ul>
</html>