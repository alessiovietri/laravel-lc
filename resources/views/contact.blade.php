@extends('layouts.main')

@section('page_title')
{{ $title }}
@endsection

@section('pippo')
    <h1>
        {{ $title }}
    </h1>

    <h2>
        User data
    </h2>
    <p>
        First name: {{ $firstName }}
    </p>
    <p>
        Last name: {{ $lastName }}
    </p>

    <ul>
        @foreach($students as $student)
            <li>
                {{ $student }}
            </li>
        @endforeach
    </ul>
@endsection
