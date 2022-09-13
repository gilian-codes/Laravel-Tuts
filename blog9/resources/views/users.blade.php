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
<h1>User Login</h1>
<form action="users" method="POST">
  @csrf
  <input type="text" name="username" placeholder="enter user id"><br><br>
  <input type="password" name="userpassword" placeholder="enter user password"><br><br>
  <input type="email" name="email" placeholder="enter user email"> <br><br>
  <button type="submit">Login</button>
</form>
 