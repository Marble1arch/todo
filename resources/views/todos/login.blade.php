<form method="POST">
@csrf
Email: <br>
<input name="email" type="email" value={{old("email")}}><br>
Parole: <br>
<input name="password" type="password"><br>
@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
<button>Login</button>

</form>