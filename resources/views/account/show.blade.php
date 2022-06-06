@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: {{ $accounts->name }}</li>
            <li class="list-group-item">First_name: {{ $accounts->first_name }}</li>
            <li class="list-group-item">last_name: {{ $accounts->last_name }}</li>
            <li class="list-group-item">DOB: {{ $accounts->dob }}</li>
            <li class="list-group-item">Phone: {{ $accounts->phone }}</li>
            <li class="list-group-item">Email: {{ $accounts->email }}</li>
            <li class="list-group-item">Address: {{ $accounts->address }}</li>
            <li class="list-group-item">Hobby: {{ $accounts->hobby }}</li>
            <li class="list-group-item">Gender: {{ $accounts->gender }}</li>
            <li class="list-group-item">State: {{ $accounts->state }}</li>
            <li class="list-group-item">Country: {{ $accounts->country }}</li>



	</div>
	<div class="mt-3">
		<a href="{{ route('accounts.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
</div>
@endsection
