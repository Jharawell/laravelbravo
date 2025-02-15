<h1>Add New Name</h1>
<form action="{{ route('names.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name" required>
    <button type="submit">Submit</button>
</form>
