<h1>Registro de instructor:</h1>
<form action="{{ url('user') }}" method="post">
    @csrf
    nombre de usuario:<input type="text" name="name" >
    <br>
    email: <input type="text" name="email" >
    <br>
    password: <input type="password" name="password" >
    <br>
    <button type="submit">
        Registrar
    </button>

</form>

