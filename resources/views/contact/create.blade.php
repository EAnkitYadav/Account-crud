@extends('layouts.app')
@section('content')

<div class="container">

        {!! Form::open(['route' => 'contacts.store']) !!}
        @csrf
        @include('contact.form')



        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        {!! Form::close() !!}
    </div>
  @endsection
