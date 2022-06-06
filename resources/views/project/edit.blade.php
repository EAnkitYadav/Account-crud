@extends('layouts.app')
@section('content')

{!! Form::open(['route' => array('projects.update', $projects->id) ,'method'=> 'post'  ] ) !!}
@method('PATCH')
 @csrf
  @include('project.form')

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Update</button>
          </div>

    {!! Form::close() !!}
@endsection