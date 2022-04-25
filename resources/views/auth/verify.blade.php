@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RegisterLogin.VerifyYourEmailAddress') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                         {{ __('RegisterLogin.Afreshverificationlinkhasbeensent') }}
                        </div>
                    @endif
{{ __('RegisterLogin.Beforeproceedingpleasecheckemail') }}
                  {{ __('RegisterLogin.Ifyoudidnotreceivetheemail') }} ,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        {{ method_field('GET') }}
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        {{ __('RegisterLogin.clickheretorequestanother') }}
                </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
