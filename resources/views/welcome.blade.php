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

    @if(count($students) > 0)
    <ul>
        @foreach($students as $student)
            <li @if($loop->even) style="color: lightcoral;" @endif>
                {{ $student }}
            </li>
        @endforeach
    </ul>
    @else
        <h3>
            Non ci sono studenti
        </h3>
    @endif

    @php
        $ok = true;
        $count = 7;
    @endphp

    <div>
        [
        @for($i = 0; $i < 10; $i++)
            {{ $i }}
            @if($i != 9)
                ,
            @endif
        @endfor
        ]
    </div>
@endsection
