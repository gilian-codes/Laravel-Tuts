 {{-- <h1>Hello view {{$name}}</h1> --}}
  {{-- <h1> Hello {{$name}}</h1> --}}

  <h1>user page</h1>

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
  @foreach($USERS as $user)
  <h1> {{$user}} </h1>
  @endforeach

 