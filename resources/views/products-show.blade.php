<html>
<h1>This is list of products</h1>
    @if(!empty($products))
        @foreach ($products as $key => $value)
            <hr>
            <p>product: {{ $key }}</p>
            <p>units: {{ $value }}</p>
            <hr>
        @endforeach
    @endif
</html>
