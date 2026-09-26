
<h1>Welcome to the home page</h1>

<P> Olá, {{ $name }}! </P>

<ul>
    @foreach ($habits as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>