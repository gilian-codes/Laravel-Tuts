<h1>User Login</h1>
<form action="user" method="POST">
    @csrf  {{--authenticate to show that the user is sending the data from current site--}}
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <button type="submit"> Login</button>

</form>