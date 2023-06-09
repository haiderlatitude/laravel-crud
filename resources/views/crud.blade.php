<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>
<body>
    @if(session()->has('message'))
        <div>
            {{session('message')}}
        </div>
    @endif
    <form action='{{route("addUser")}}'>
        <button>Add User</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>@include('editUserButton')</td>
            <td>@include('deleteUser')</td>
        </tr>
    @endforeach
    </table>
</body>
</html>