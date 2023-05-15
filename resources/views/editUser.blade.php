<form action="{{route('edit')}}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" id="id" value="{{ json_decode($user, true)['id'] }}">
    <input type="text" name="name" id="name" value="{{ json_decode($user, true)['name'] }}"> <br> <br>
    <input type="text" name="email" id="email" value="{{ json_decode($user, true)['email'] }}"> <br> <br>
    <input type="text" name="password" id="password" value="New Password"> <br> <br>
    <button type="submit">Update</button>
</form>