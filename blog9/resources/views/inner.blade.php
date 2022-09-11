<h1>Users Inner Block</h1>

{{-- we want to include the view file inside this file --}}
@include(inner)

{{-- Passing the data from Controller to this Page --}}
@foreach ($USERS as $item)
<h3>{{$item}}</h3> 
@endforeach


{{-- php in js --}}
<script>
    var data=@json($USERS);
    console.warn(data[0]);
</script>
