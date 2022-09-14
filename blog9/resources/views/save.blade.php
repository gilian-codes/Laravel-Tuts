<h1>save data in the database</h1>

<form action="save" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name"> <br><br>
    <input type="email " name="email" placeholder="enter email"> <br><br>
    <input type="text" name="address" placeholder="enter address"> <br><br>
    <button type="submit">save</button>
</form>