<style>
    <style>body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    a {
        color: #007bff;
        text-decoration: none;
        margin-right: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #343a40;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    td a {
        color: #007bff;
        text-decoration: none;
        margin-right: 10px;
    }

    td form {
        display: inline-block;
    }

    td form input[type="submit"] {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
</style>
@extends('index')
@section('content')
    <a href={{ route('example.create') }}>Create</a>

    <table>

        <head>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>show</th>
                <th>description</th>
                <th>created</th>
                <th>updated</th>
                <th>deleted</th>
                <th>action</th>
            </tr>
        </head>

        <body>
            @each('example.data', $test, 'data', 'example.empty_data')
        </body>
    </table>
@endsection
