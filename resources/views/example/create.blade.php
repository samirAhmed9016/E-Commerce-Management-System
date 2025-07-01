<style>
    <style>form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    label {
        margin-right: 15px;
    }

    select {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: red;
        margin-top: 5px;
    }
</style>






@extends('index')
@push('css')
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
@endpush
@section('content')
    <form action="{{ route('example.store') }}" method="post">
        @csrf



        {{-- <input type="radio" name="show" id="show" value="1">
        <label for="show">show data</label>

        <input type="radio" name="hide" id="hide" value="0">
        <label for="hide">hide data</label> --}}


        <input type="radio" name="show" id="show" value="1">
        <label for="show">Show data</label>

        <input type="radio" name="show" id="hide" value="0">
        <label for="hide">Hide data</label>





        <select name="status" id="s">
            <option value="enable">enable</option>
            <option value="disable">disable</option>
        </select>
        <label for="s">show data</label>

        <input type="text" name="name" value="{{ old('name') }}"><br>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <textarea name="description" placeholder="content">{{ old('description') }}</textarea><br>
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <input type="submit" value="create">
    </form>
@endsection
{{-- @push('js')
    <script>
        alert('you are create a new record now')
    </script>
@endpush --}}
