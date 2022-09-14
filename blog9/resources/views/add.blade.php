<h1>add members</h1>
@if(session('user'))
<h3 style="color: green">{{session('user')}} user has been added successfully</h3>
@endif
<form action="addmember" method="POST">
    @csrf
    <input type="user" name="user" placeholder="enter username"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <input type="email" name="email" placeholder="enter email"><br><br>
    <button type="submit">submit</button>
</form>