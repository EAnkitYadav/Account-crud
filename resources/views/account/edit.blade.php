@extends('layouts.app')
@section('content')

<div class="container">
{!! Form::open(['route' => array('accounts.update', $accounts->id) ,'method'=> 'post'  ] ) !!}
@method('PATCH')
 @csrf
  @include('account.form')

        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Update</button>
          </div>

    {!! Form::close() !!}
</div>
@endsection
