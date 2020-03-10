@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <br><br>
            <div class="card">

                <div class="card-header" style="border-color: #fbb040;background-color: transparent;color: #fbb040;text-align: center;font-weight: bolder">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="border-radius: 30px;background-color: #000000;font-weight: bold;border: none;cursor: pointer;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-fluid">
    <div class="row">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <img src="/uploads/image/bg_registerLogin.jpg" class="img-fluid" alt="Responsive image" style="width: 100%; height: auto;">

            <div class="col-md-6 offset-md-3" style="position: absolute; padding: 70px 100px 50px 100px;">
                <div class="boxDetailLogin">
                    <div class="boxHeadRegister text-center">
                        <h1>เข้าสู่ระบบ</h1>
                        <h5>ผู้ใช้ทั่วไป</h5>
                    </div><!-- boxHeadRegister -->
                    <div class="boxInsertEmail">
                        <h4>Email</h4>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="boxInsertPassword">
                        <h4>รหัสผ่าน</h4>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="boxInsertPasswordConfirm">
                        <div class="boxBTNregister">
                            <button type="submit" class="btn btn-primary" style="border-radius: 30px;background-color: #000000;font-weight: bold;border: none;cursor: pointer;">
                                {{ __('เข้าสู่ระบบ') }}
                            </button>

                        </div>
                    </div><!-- boxInsertPasswordConfirm -->

                    <div class="row" style="padding: 10px 47px 0 48px;">
                        <div class="col-md-7">
                            <div class="boxLoginBottom">
                                <p style="font-size: 16px; color: #bcbcbc;">หากมีบัญชีอยู่แล้ว<a href="register.html" style="padding-left: 17px; color: #000000; font-weight: bold; font-size: 16px;">สมัครสมาชิก</a></p>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <div class="boxLoginBottomR text-right">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" style="padding-left: 17px; color: #939393; font-weight: bold; font-size: 16px; font-weight: lighter;">{{ __('ลืมรหัสผ่าน?') }}</a>
                                @endif
                            </div>
                        </div>
                    </div><!-- row -->

                </div><!-- boxDetailRegister -->

            </div><!-- col-md-6 offset-md-3 -->
        </form>
    </div><!-- row -->



</div><!-- container --> --}}
@endsection
