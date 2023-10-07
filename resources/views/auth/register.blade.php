@extends("core::web.master")

{{--tuỳ biến riêng css tại đây--}}
<link rel="stylesheet" href="{{URL::asset('assets/user/css/login.css')}}">
@section("css-custom")
    <style>
        .form-input input {
            border-radius: 0px 8px 8px 0px;
            /*border-left: 0;*/
        }
    </style>
@endsection

@section("content")
    <div class="body">
        <section class="section-link">
            <div class="container">
                <ul class="nav" style="gap: 0px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span class="pe-1">Trang chủ</span>
                            <img src="{{URL::asset('assets/user/assets/svg/arrow_left.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="nav-item ">
{{--                        <a class="nav-link" href="#">--}}
                            <span class="pe-1">Đăng kí</span>
{{--                        </a>--}}
                    </li>
                </ul>
            </div>
        </section>

        <section class="login-page">
            <div class="container">
                <form action="{{ route('register.store') }}" class="form" method="post">
                    @csrf
                    <div class="form-header">
                        <h4 class="form-title">Đăng ký tài khoản</h4>
                        <p class="form-text">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập</a></p>
                    </div>
                    <div class="form-input">
                        <div class="input-name">
                            <span class="label">Họ và tên</span>
                            <div class="input-group input-group-merge input-group input-group-merge input-item">
                                <div class="input-item-icon">
                                    <img src="{{URL::asset('assets/user/assets/svg/input-user.svg')}}" alt="">
                                </div>
                                <input value="{{ old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif" type="text" name="name" placeholder="Nhập Họ và tên">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-name">
                            <span class="label">Số điện thoại</span>
                            <div class="input-group input-group-merge input-item">
                                <div class="input-item-icon">
                                    <img src="{{URL::asset('assets/user/assets/svg/input-phone.svg')}}" alt="">
                                </div>
                                <input value="{{ old('phone')}}" class="form-control @if($errors->has('phone')) is-invalid @endif" type="text" name="phone" placeholder="Nhập số điện thoại">
                                @if($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-name">
                            <span class="label">Email</span>
                            <div class="input-group input-group-merge input-item">
                                <div class="input-item-icon">
                                    <img src="{{URL::asset('assets/user/assets/svg/input-mail.svg')}}" alt="">
                                </div>
                                <input value="{{ old('email')}}" class="form-control @if($errors->has('email')) is-invalid @endif" type="text" name="email" placeholder="Nhập địa chỉ mail">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-name">
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
                        <div class="input-name">
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
                    </div>
                    <button type="submit" class="btn-sumbit mt-4">
                        Đăng ký
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection
