<h1>Reģistrēties</h1>

<form method="POST">
    @csrf
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
        
        <label>First name:<input name='first_name' required value={{old("first_name")}}> <br>
        <label>Last name:<input name='last_name' required value={{old("last_name")}}><br>
        <label>Email name:<input name='email' type="email" required value={{old("email")}}><br>
        <label>Password name:<input name='password' type="password" required><br>
        <label>Confirm password name:<input name="password_confirmation" type="password" required><br>
    <button>Reģistrēties</button>
</form>