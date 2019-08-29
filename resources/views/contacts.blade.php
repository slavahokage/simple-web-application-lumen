<html>
<h1>List of contacts</h1>
<ul>
    @foreach ($contacts as $contact)
        <li> {{ $contact->name }} - {{ $contact->number }} </li>
    @endforeach
</ul>
</html>