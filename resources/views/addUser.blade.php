    @if(session()->has('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    
    <form action="{{route('add')}}" method="post">
    @csrf
    <label for="name">
        Name <input type="text" name="name" id="name" required/>
    </label><br/><br/>
    <label for="email">
        Email <input type="email" name="email" id="email" required/>
    </label><br/><br/>
    <label for="password">
        Password <input type="password" name="password" id="password" required/>
    </label>
    <button type="submit" value="Add">Add</button>
</form>