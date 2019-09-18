@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Identity') }}</div>

                    <div class="card-body">

                        <div class="alert alert-danger" role="alert">
                            Enter the verification code you received on your mobile
                        </div>

                        <form method="POST" action="{{ route('2fa.verify') }}" autocomplete="off">
                            @csrf

                            <div class="form-group row">
                                <label for="2fa" class="col-md-4 col-form-label text-md-right">{{ __('Verification Code') }}</label>

                                <div class="col-md-6">
                                    <input id="2fa" type="text" class="form-control @error('2fa') is-invalid @enderror" name="2fa" value="{{ old('code') }}" required autofocus>

                                    @error('2fa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Verify') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
