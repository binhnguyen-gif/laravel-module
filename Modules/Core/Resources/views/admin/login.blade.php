@extends('core::layouts.non-auth')
@section('content')
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-12 p-5 mr-auto">
                                    <div class="mx-auto mb-5">
                                        <a href="/">
                                            <img src="assets/images/logo.png" alt="" height="24" />
                                            <h3 class="d-inline align-middle ml-1 text-logo">Admin</h3>
                                        </a>
                                    </div>

                                    @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>
                                    <br>@endif
                                    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                                    <br>@endif

                                    <form action="{{ route('core.admin.login.post') }}" method="post" class="authentication-form">
                                        @csrf

                                        <div class="form-group">
                                            <label class="form-control-label">Email Address</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                                </div>
                                                <input type="email"
                                                       class="form-control @if($errors->has('email')) is-invalid @endif" id="
                                                email" placeholder="admin@admin.com" name="email" value="{{ old('email')}}" />

                                                @if($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <label class="form-control-label">Password</label>
                                            <a href=""
                                               class="float-right text-muted text-unline-dashed ml-1">Forgot your
                                                password?</a>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                                </div>
                                                <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="password"
                                                       placeholder="Enter your password"  name="password" />

                                                @if($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                    {{ old('remember') ? 'checked' : '' }} />
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit"> Log In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

@endsection
