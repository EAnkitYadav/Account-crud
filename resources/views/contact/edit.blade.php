@extends('layouts.app')
@section('content')
<div class="container">
{!! Form::open(['route' => array('contacts.update', $contacts->id) ,'method'=> 'post']) !!}
@method('PATCH')
 @csrf
  @include('contact.form')

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Update</button>
          </div>

    {!! Form::close() !!}
</div>
@endsection
