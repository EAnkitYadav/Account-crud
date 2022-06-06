@extends('layouts.app')
@section('content')
<div class="container">
<div class="mb-3">
<a href="{{route('contacts.create')}}" class="btn btn-success">Add New Data</a>
</div>
<table class="table table-borderd shadow text-center table-stripes">
<thead>
<tr>
<td>  ID </td>
<td> Company_Name </td>
<td>  Phone_Number</td>
<td>  Email </td>
<td> Address</td>
<td> Description </td>
<td> Accounts_Id </td>

</tr>
</thead>
<tbody>
@foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id}}</td>
            <td>{{ $contact->company_name}}</td>
            <td>{{ $contact->phone_number}}</td>
            <td>{{ $contact->email}}</td>
            <td>{{ $contact->address}}</td>
            <td>{{ $contact->description}}</td>

            <td>
                @foreach ($contact->accounts as $account)
                     {{$account->name}} <br/>
                @endforeach
            </td>
            
          <td >
            <form action="{{ route('contacts.edit', $contact->id)}}" method="GET">
             @csrf
             <button class="btn btn-primary" type="submit">Edit</button>
           </form>
         </td>
          <td >
            <form action="{{ route('contacts.show', $contact->id)}}" method="GET">
             @csrf
             <button class="btn btn-success" type="submit">Show</button>
           </form>
       </td>
     <td >
        <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
         @csrf
         @method('DELETE')
         <button class="btn btn-danger" type="submit">Delete</button>
       </form>
 </td>

         </tr>
@endforeach
</tbody>
</table>
{{ $contacts->links() }}
</div>
@endsection
