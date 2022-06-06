@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br/><br/>

                    <a href="{{route('accounts.index')}}" class="btn btn-success">Account</a>
                    <a href="{{route('contacts.index')}}" class="btn btn-success">Contact</a>
                    <a href="{{route('projects.index')}}" class="btn btn-success">Project</a>
                    <a href="{{route('users.index')}}" class="btn btn-success">User</a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
