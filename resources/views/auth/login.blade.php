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
                            <span class="pe-1">Đăng nhập</span>
{{--                        </a>--}}
                    </li>
                </ul>
            </div>
        </section>
        <section class="login-page">
            <div class="container">
                @if(session('error'))<div class="alert alert-danger p-2 text-center">{{ session('error') }}</div>
                <br>@endif
                @if(session('success'))<div class="alert alert-success p-2 text-center">{{ session('success') }}</div>
                <br>@endif
                @if(session('status'))<div class="alert alert-success p-2 text-center">{{ session('status') }}</div>
                <br>@endif
                <form action="{{ route('login.store') }}" class="form" method="post">
                    @csrf
                    <div class="form-header">
                        <h4 class="form-title">Đăng nhập tài khoản</h4>
                        <p class="form-text">Bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký</a></p>
                    </div>
{{--                    <div class="form-social">--}}
{{--                        <button class="social social-mail">--}}
{{--                            <img src="./assets/images/gmail.png" alt="">--}}
{{--                            <p class="socail-text">Đăng nhập với Google</p>--}}
{{--                        </button>--}}
{{--                        <button class="social social-fb">--}}
{{--                            <img src="./assets/images/fb.png" alt="">--}}
{{--                            <p class="socail-text">Đăng nhập với Facebook</p>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="form-or">--}}
{{--                        <div class="form-line"></div>--}}
{{--                        <p>Hoặc</p>--}}
{{--                        <div class="form-line"></div>--}}
{{--                    </div>--}}
                    <div class="form-input mt-4">
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
                    <div class="form-input mt-4 mb-4">
                        <div class="input-password">
                            <div class="input-header">
                                <span class="label">Mật khẩu</span>
                                <a href="{{route('password.request')}}"><span class="label-forget">Quên mật khẩu?</span></a>
                            </div>
                            <div class="input-group input-group-merge input-item">
                                <div class="input-item-icon">
                                    <img src="{{URL::asset('assets/user/assets/svg/input-pass.svg')}}" alt="">
                                </div>
                                <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password" placeholder="Nhập mật khẩu">
                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button class="btn-sumbit">
                        Đăng nhập
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection
