<html>
<h1>Update news</h1>

<form method="post" action="/news/store/{{$news->id}}">
    <table>
        <tr>
            <td>Title:</td>
            <td><p><input name="title" value="{{$news->title}}"></p></td>
        </tr>

        <tr>
            <td>Description:</td>
            <td><p><input name="description" value="{{$news->description}}"></p></td>
        </tr>
    </table>
    <p><input name="id" type="submit" value="Update new"></p>
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