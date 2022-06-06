@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Company_Name: {{$contacts->company_name }}</li>
            <li class="list-group-item">Phone_number: {{$contacts->phone_number }}</li>
            <li class="list-group-item">Email: {{ $contacts->email }}</li>
            <li class="list-group-item">Address: {{ $contacts->address }}</li>
            <li class="list-group-item">Description: {{ $contacts->description }}</li>

	</div>
	<div class="mt-3">
		<a href="{{ route('contacts.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
</div>
@endsection
