 {{-- <h1>Hello view {{$name}}</h1> --}}
  {{-- <h1> Hello {{$name}}</h1> --}}

  {{-- <h1>user page</h1> --}}

  {{-- adding the blade template --}}
  {{-- {{count($USERS)}}  --}}

  {{-- if statement --}}
  {{-- @if($USER=="gilian")
     <h1>hi {{$USER}} </h1> --}}
  {{-- else if statement --}}
  {{-- @elseif($USER=="daniel")
  <h3>hello {{$USER}}</h3>
  @else
  <h3>Unknown User</h3>
  
  @endif  --}}

  {{-- FOR LOOP  --}}

  {{-- @for($i=0;$i<10;$i++)
  <h4>{{$i}}</h4>
  @endfor --}}

  {{-- got each loop --}}
  {{-- @foreach($USERS as $user)
  <h1> {{$user}} </h1>
  @endforeach --}}

  {{-- we want to include the view inside another view --}}
{{-- @include('header')
@include('inner') --}}

{{-- Passing the data from Controller to this Page --}}
{{-- @foreach ($USERS as $item)
<h3>{{$item}}</h3> 
@endforeach --}}

{{-- How to get the users inside the js --}}
{{-- @csrf
<script>
    var data=@json($USERS);
    console.warn(data);
</script> --}}

{{-- HTML FORM --}}
{{-- <h1>User Login</h1> --}}
{{-- @if($errors->any())
@foreach($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif --}}

{{-- <form action="users" method="POST">
  @csrf
  <input type="text" name="username" value="{{old("username")}}" placeholder="enter user id" ><br>
     <span style="color: red"> @error('username'){{$message}}@enderror</span>
  <br>

  <input type="password" value="{{old("userpassword")}}" name="userpassword" placeholder="enter user password"><br>
     <span style="color: red"> @error('userpassword'){{$message}}@enderror</span><br>

  <input type="email" name="email" value="{{old("email")}}" placeholder="enter user email"> <br>
     <span style="color: red"> @error('email'){{$message}}@enderror</span><br>

  <button type="submit">Login</button>
</form>
  --}}

  {{-- MIDDLEWARE --}}
  {{-- <h1>User page</h1> --}}

  {{-- http client --}}
  {{-- render the data in html table and pass it to the view --}}
{{-- 
  <h1>User List</h1>
  <table border="1">
   <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td>Profile Photo</td>
   </tr>

  @foreach($collection as $item)
  <tr>
   <td>{{$item['id']}}</td>
   <td>{{$item['first_name']}}</td>
   <td>{{$item['email']}}</td>
   <td><img src="{{$item['avatar']}}"></td>
  </tr>
  @endforeach

  </table> --}}

  {{-- Http Request --}}
  
  {{-- <h1>User Login</h1>
  <form action="users" method="POST">
   @csrf
   <input type="text" name="user" placeholder="enter name"><br><br>
   <input type="password" name="password" placeholder="enter password"><br><br>
   <button type="submit">login</button>
  </form> --}}