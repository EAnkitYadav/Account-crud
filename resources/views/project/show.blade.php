@extends('layouts.app')
@section('content')

<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Project_Title: {{$projects->project_title }}</li>
            <li class="list-group-item">Project_Name: {{$projects->project_name }}</li>
            <li class="list-group-item">Phone_Number: {{$projects->phone }}</li>
            <li class="list-group-item">Address: {{ $projects->email }}</li>
            <li class="list-group-item">Description: {{ $projects->description }}</li>

	</div>
	<div class="mt-3">
		<a href="{{ route('projects.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
@endsection