@extends('layouts.app')

@section('content')
    <h1>URLs</h1>

    <ul>
        @foreach($urls as $url)
            <li>
                <a href="{{ $url->original_url }}" target="_blank">{{ $url->shortened_url }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('urls.create') }}">Shorten a new URL</a>
@endsection