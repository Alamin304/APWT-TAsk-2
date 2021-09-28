<h1>User Login</h1>
<form action="login" method="GET">
    @csrf
    <input type="text"name="username"placeholder="enter user name"/><br></br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <input type="password"name="userpassword"placeholder="enter user password"/><br></br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <button type="submit">Login</button>
</form>