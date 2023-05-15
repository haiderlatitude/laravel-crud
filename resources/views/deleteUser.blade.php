<form action="delete/{{$user->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">
        Delete
    </button>
</form>