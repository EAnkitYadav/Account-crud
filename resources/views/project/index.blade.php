@extends('layouts.app')
@section('content')
<div class="mb-3">
<a href="{{route('projects.create')}}" class="btn btn-success">Add New Data</a>
</div>
<table class="table table-borderd shadow text-center table-stripes">
<thead>
<tr>
<td>ID</td>
<td> Project_Title </td>
<td> Project_Name </td>
<td> Phone_Number</td>
<td> Email </td>
<td> Description </td>
<td> Account </td>
<td>User_id</td>
</tr>
</thead>
<tbody>
@foreach($projects as $project)
        <tr>
            <td>{{ $project->id}}</td>
            <td>{{ $project->project_title}}</td>
            <td>{{ $project->project_name}}</td>
            <td>{{ $project->phone}}</td>
            <td>{{ $project->email}}</td>
            <td>{{ $project->description}}</td>
            <td>
                @foreach ($project->accounts as $account)
                         {{$account->name}} <br/>
                @endforeach
            </td>
            <td>
                @foreach ($project->users as $user)
                         {{$user->name}} <br/>
                @endforeach
            </td>

          <td >
            <form action="{{ route('projects.edit', $project->id)}}" method="GET">
             @csrf
             <button class="btn btn-primary" type="submit">Edit</button>
           </form>
         </td>
          <td >
            <form action="{{ route('projects.show', $project->id)}}" method="GET">
             @csrf
             <button class="btn btn-success" type="submit">Show</button>
           </form>
     </td>
     <td >
        <form action="{{ route('projects.destroy', $project->id)}}" method="post">
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
