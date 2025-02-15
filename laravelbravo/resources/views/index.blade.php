


<h1>Names List</h1>
<a href="{{ route('names.create') }}">Add New Name</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($names as $name)
            <tr>
                <td>{{ $name->name }}</td>
                <td>
                    <a href="{{ route('names.edit', $name->id) }}">Edit</a>
                    <form action="{{ route('names.destroy', $name->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
