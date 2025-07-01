@extends('index')
@section('content')
    <style>
        p {
            font-size: 16px;
            margin-bottom: 8px;
            line-height: 1.6;
            color: #333;
            /* Adjust the text color as needed */
        }

        p strong {
            font-weight: bold;
        }

        p em {
            font-style: italic;
        }
    </style>
    <p>{{ $test->id }}</p>
    <p>{{ $test->name }}</p>
    <p>{{ $test->description }}</p>
    <p>{{ $test->created_at }}</p>
    <p>{{ $test->updated_at }}</p>
@endsection
