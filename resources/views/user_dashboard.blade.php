@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('lables.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::guard()->getName()}}
                    {{ __('lables.You are logged in!') }}
                    <div>
                        <h1>{{'User Dashboard'}} </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
