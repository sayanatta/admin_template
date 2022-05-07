@extends('admin.authorization.layouts.layout')
@section('title') Log in @endsection
@section('section')
    <div class="login-box">
        <div class="login-logo">
            <a href="javascript:void (0)"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                @include('alert_message')
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{route('login_check')}}" method="post" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control"
                               placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
        </div>
    </div>
    @push('script')
    @endphp
@endsection
