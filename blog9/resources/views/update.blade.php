<h1>Update</h1>
<form action="edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data}}">
    <input type="text" name="name" placeholder="enter name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" placeholder="enter email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" placeholder="enter address" value="{{$data['address']}}"><br><br>
    <button type="submit">Update</button>
</form>