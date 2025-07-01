<style>
    /* Add these styles to your existing CSS */
    form {
        margin-top: 16px;
        /* Adjust the top margin as needed */
        display: flex;
        flex-direction: column;
        max-width: 400px;
        /* Adjust the maximum width as needed */
        margin-left: auto;
        margin-right: auto;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
        height: 150px;
        /* Adjust the height as needed */
    }

    input[type="submit"] {
        background-color: #4caf50;
        /* Change to your preferred button color */
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
        /* Change to your preferred button hover color */
    }
</style>

@extends('index')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('example.update', ['example' => $test->id]) }}" method="post">
        @csrf
        @method('put')


        <input type="radio" name="show" id="show" value="1" @checked($test->show == 1)>
        <label for="show">show data</label>

        <input type="radio" name="show" id="show" value="0" @checked($test->show == 0)>
        <label for="show">hide data</label>

        <select name="status" id="s">
            <option @selected($test->status == 'enabled') value="enable">enable
            </option>
            <option @selected($test->status == 'disabled') value="disable">disable</option>
        </select>
        <label for="s">show data</label>




        <input type="text" name="name" value="{{ $test->name }}"><br><br>
        <textarea name="description" placeholder="content">
        {{ $test->description }}</textarea><br><br>
        <input type="submit" value="update">
    </form>
@endsection
