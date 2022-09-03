@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('lables.Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('lables.A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('lables.Before proceeding, please check your email for a verification link.') }}
                    {{ __('lables.If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend', app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Lables.click here to request another_B') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
