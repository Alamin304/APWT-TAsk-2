<h1>User Registration</h1>
<form action="registration" method="GET">
    @csrf
    <input type="text"name="userfirstname"placeholder="First Name"/><br></br>
    <span style="color: red">@error('userfirstname'){{$message}}@enderror</span>
    <input type="text"name="username"placeholder="User Name"/><br></br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <input type="text"name="useremail"placeholder="Email"/><br></br>
    <span style="color: red">@error('useremail'){{$message}}@enderror</span>
    <input type="password"name="userpassword"placeholder="Enter your password"/><br></br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <input type="password"name="reuserpassword"placeholder="Again enter your password"/><br></br>
    <span style="color: red">@error('reuserpassword'){{$message}}@enderror</span>
    <button type="submit">Register</button>
</form>