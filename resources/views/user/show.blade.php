@extends('layouts.app')
@section('content')

<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Name: {{$users->name }}</li>
            <li class="list-group-item">Email: {{$users->email }}</li>
            <li class="list-group-item">Password: {{$users->password }}</li>


	</div>
	<div class="mt-3">
		<a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
@endsection
