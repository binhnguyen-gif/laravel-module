@extends("core::web.master")

<link rel="stylesheet" href="{{URL::asset('assets/user/css/login.css')}}">
@section("css-custom")
    {{--tuỳ biến riêng css tại đây--}}
    <style>
        .form-input input {
            border-radius: 0px 8px 8px 0px;
            /*border-left: 0;*/
        }
    </style>
@endsection

@section("content")
    <div class="body">
        <section class="login-page">
            <div class="container">
                <form action="{{ route('password.update') }}" class="form" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->token }}" />
                    <div class="form-header">
                        <h4 class="form-title">Đặt lại mật khẩu</h4>
                        @if(session('error'))<div class="alert alert-danger p-2">{{ session('error') }}</div><br>@endif
                        @if(session('success'))<div class="alert alert-success p-2">{{ session('success') }}</div><br>@endif

                    </div>
                    <div class="form-input mb-3">
                        <div class="input-name">
                            <span class="label">Email</span>
                            <div class="input-group input-group-merge input-item">
                                <div class="input-item-icon">
                                    <img src="{{URL::asset('assets/user/assets/svg/input-user.svg')}}" alt="">
                                </div>
                                <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Nhập email" value="{{ old('email')}}">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-input input-name mb-3">
                        <span class="label">Mật khẩu mới</span>
                        <div class="input-group input-group-merge input-item">
                            <div class="input-item-icon">
                                <img src="{{URL::asset('assets/user/assets/svg/input-pass.svg')}}" alt="">
                            </div>
                            <input class="form-control @if($errors->has('password')) is-invalid @endif" type="password" name="password" placeholder="Nhập mật khẩu">
                            @if($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-input input-name mb-3">
                        <span class="label">Xác nhận mật khẩu</span>
                        <div class="input-group input-group-merge input-item">
                            <div class="input-item-icon">
                                <img src="{{URL::asset('assets/user/assets/svg/input-pass.svg')}}" alt="">
                            </div>
                            <input class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                            @if($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <button class="btn-sumbit">
                        Xác nhận
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection
