<h1>Login</h1>
<form method="post" action="/autenticar">
    @csrf
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Login">
</form>