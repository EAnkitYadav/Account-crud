@extends('layouts.app')
@section('content')
<div class="mb-3">
<a href="{{route('users.create')}}" class="btn btn-success">Add New Data</a>
</div>
<table class="table table-borderd shadow text-center table-stripes">
<thead>
<tr>
<td> ID </td>
<td> Name </td>
<td> Email </td>
<td> Password</td>
<td> Project_id</td>
</tr>
</thead>
<tbody>
@foreach($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->password}}</td>
            <td>
                @foreach ($user->projects as $project)
                          {{$project->project_name}} <br/>
                @endforeach
            </td>

          <td >
            <form action="{{ route('users.edit', $user->id)}}" method="GET">
             @csrf
             <button class="btn btn-primary" type="submit">Edit</button>
           </form>
         </td>
          <td >
            <form action="{{ route('users.show', $user->id)}}" method="GET">
             @csrf
             <button class="btn btn-success" type="submit">Show</button>
           </form>
     </td>
     <td >
        <form action="{{ route('users.destroy', $user->id)}}" method="post">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger" type="submit">Delete</button>
       </form>
 </td>

         </tr>
@endforeach
</tbody>
</table>
@endsection
