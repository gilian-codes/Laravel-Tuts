 {{-- <h1>Hello view {{$name}}</h1> --}}
  {{-- <h1> Hello {{$name}}</h1> --}}

  <h1>user page</h1>

  {{-- adding the blade template --}}
  {{-- {{count($USERS)}}  --}}

  {{-- if statement --}}
  @if($USER =='gilian')
     <h1>hi {{$USER}}</h1>
 @endif