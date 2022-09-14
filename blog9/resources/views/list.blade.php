<h1>Members List</h1>
{{-- how to insert data in the database --}}
{{-- <table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>     
    </tr>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>     
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>     
    </tr>
    @endforeach
</table> --}}

{{-- //laravel patigation --}}
{{-- <table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>     
    </tr>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>     
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>     
    </tr>
    @endforeach
</table> --}}

{{-- to see the other pages of propagation, we go to the --}}
{{-- <span>
   {{$members->links()}}
</span> --}}

{{-- <style>
    .w-5{
        display: none
    }
</style> --}}

{{-- DELETING DATA FROM A DATABASE --}}
@if(session('message'))
    <h2 class="alert alert-success">
        {{ session('message') }}
    </h2>

@endif

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>   
        <td>Operation</td>    
    </tr>
    @foreach($members as $member) 
    {{-- $members we are using the members key here because we passed it in the list view --}}
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>     
        <td>
            <a style="color: red" href="{{"delete/".$member['id']}}">Delete</a>
            <a href="{{"update/".$member['id']}}">Update</a>
        </td>  
     </tr>
    @endforeach
    
</table>
