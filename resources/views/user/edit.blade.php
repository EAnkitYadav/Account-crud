@extends('layouts.app')
@section('content')

{!! Form::open(['route' => array('users.update', $users->id) ,'method'=> 'post'  ] ) !!}
@method('PATCH')
 @csrf
  @include('user.form')

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Update</button>
          </div>

    {!! Form::close() !!}
@endsection
