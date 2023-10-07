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
                <div class="text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('password.email') }}" class="form" method="post">
                    @csrf
                    <div class="form-header">
                        <h4 class="form-title">Quên mật khẩu</h4>
                        <p class="form-text"> Tại đây bạn có thể dễ dàng lấy lại mật khẩu mới.</p>
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
                    <button class="btn-sumbit">
                        Gửi link reset mật khẩu
                    </button>
                    <p class="mt-3 mb-1">
                        <a href="{{ route("login") }}">Đăng nhập</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route("register") }}" class="text-center">Đăng kí một tài khoản mới</a>
                    </p>
                </form>
            </div>
        </section>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection
