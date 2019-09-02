<html>
<h1>Create news</h1>

<form method="post" action="/news/store">
    <input type="hidden" name="_token" value="{{ app('request')->session()->get('_token') }}">
    <table>
        <tr>
            <td>Title:</td>
            <td><p><input name="title" value="@isset($_COOKIE['title']){{$_COOKIE['title']}}@endisset"></p></td>
        </tr>

        <tr>
            <td>Description:</td>
            <td><p><input name="description"
                          value="@isset($_COOKIE['description']){{$_COOKIE['description']}}@endisset"></p></td>
        </tr>
    </table>
    <p><input type="submit" value="Create new"></p>
</form>
@if(!empty($errors))
    <ul>
        @foreach($errors as $currentError)
            @foreach($currentError as $rules)
                <li>{{$rules}}</li>
            @endforeach
        @endforeach
    </ul>
@endif
</html>