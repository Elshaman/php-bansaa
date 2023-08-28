<h1>Login:</h1>
<form action="{{ url('login') }}" method="post">
    @csrf
    Email<input type="text" name="email" >
    <br>
    password: <input type="password" name="password" >
    <br>
    <button type="submit">
        Ingresar
    </button>

</form>
