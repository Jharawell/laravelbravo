<h1>Edit Name</h1>
<form action="{{ route('names.update', $name->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $name->name }}" required>
    <button type="submit">Update</button>
</form>
