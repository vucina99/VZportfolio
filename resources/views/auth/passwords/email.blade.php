@extends('logreg')

@section('content')
<div class="container">
    <div class="row justify-content-center">
          <div class="col-md-12 col-sm-12 col-lg-1"></div>
         <div class="col-md-12 col-sm-12 col-lg-10">
            <div class="card boja">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="/login">
                                        {{ __(' < Go back') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
          <div class="col-md-12 col-sm-12 col-lg-1"></div>
    </div>
</div>
@endsection
