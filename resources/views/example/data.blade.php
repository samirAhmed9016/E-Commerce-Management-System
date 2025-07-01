<tr>
    <td>{{ $data->name }}</td>
    <td>{{ $data->status }}</td>
    <td>{{ $data->show == 1 ? 'show' : 'hidden' }}</td>
    <td>{{ $data->description }}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->updated_at }}</td>
    <td>{{ $data->deleted_at }}</td>
    <td>
        <a href="example/{{ $data->id }}/edit">Edit</a>
        <a href="example/{{ $data->id }}">Show</a>


        <form action="{{ route('example.destroy', ['example' => $data->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>


        <form action="{{ route('example.restore', ['example' => $data->id]) }}" method="post">
            @csrf
            <input type="submit" value="Restore">
        </form>


        <form action="{{ route('example.forceDelete', ['example' => $data->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="ForceDelete">
        </form>
    </td>

</tr>
