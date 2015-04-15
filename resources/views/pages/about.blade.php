@extends('app')

@section('content')

    @if ($first=='Sofian')
        <h1>About Me: {{$first}} </h1>
    @else
        <h1>Else </h1>
    @endif

    @if (count($people))
        <h3>People I Like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid exercitationem in ipsum libero obcaecati possimus provident velit? Deserunt facere fuga labore omnis quasi, recusandae similique! Deleniti itaque molestiae officia voluptatum.
    </p>
@stop