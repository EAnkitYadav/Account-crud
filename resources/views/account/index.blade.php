@extends('layouts.app')
@section('content')
<div class="container">
<div class="mb-3">
<a href="{{route('accounts.create')}}" class="btn btn-success">Add New Data</a>
</div>
<table class="table table-borderd shadow text-center table-stripes">
<thead>
<tr>
<td>  ID </td>
<td>  Name </td>
<td>  First_Name</td>
<td>  Last_Name</td>
<td> DOB</td>
<td> Phone</td>
<td>  Email </td>
<td> Address</td>
<td> Hobby </td>
<td> Gender </td>
<td> Country </td>
<td> State </td>
<td> Contact_Id </td>
<td> Project </td>
</tr>
</thead>
<tbody>
@foreach($accounts as $account)
        <tr>
            <td>{{$account->id}}</td>
            <td>{{$account->name}}</td>
            <td>{{$account->first_name}}</td>
            <td>{{$account->last_name}}</td>
            <td>{{$account->dob}}</td>
            <td>{{$account->phone}}</td>
            <td>{{$account->email}}</td>
            <td>{{$account->address}}</td>
            <td>{{$account->hobby}}</td>
            <td>{{$account->gender}}</td>
            <td>{{$account->country}}</td>
            <td>{{$account->state}}</td>
            <td>
                @foreach ($account->contacts as $contact)
                          {{$contact->company_name}}<br/><br/>
                @endforeach
            </td>
            <td>
                @foreach ($account->projects as $project)
                          {{$project->project_title}}<br/><br/>
                @endforeach
            </td>
          <td >
            <form action="{{ route('accounts.edit', $account->id)}}" method="GET">
             @csrf
             <button class="btn btn-primary" type="submit">Edit</button>
           </form>
         </td>
          <td >
            <form action="{{ route('accounts.show', $account->id)}}" method="GET">
             @csrf
             <button class="btn btn-success" type="submit">Show</button>
           </form>
     </td>
     <td >
        <form action="{{ route('accounts.destroy', $account->id)}}" method="post">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger" type="submit">Delete</button>
       </form>
 </td>
 
         </tr>
@endforeach
</tbody>
</table>
</div>
@endsection
