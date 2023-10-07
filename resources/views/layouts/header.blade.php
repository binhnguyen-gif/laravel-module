<header class="header">
    <div class="container  ">
        <div class="flex-wrap py-3 d-flex align-items-center  justify-content-between">
            <a href="./" class="mb-2 d-flex align-items-center mb-md-0 text-dark text-decoration-none">
                <img src="{{URL::asset('assets/user/assets/svg/logo.svg')}}" alt="">
            </a>
            <ul class="mb-2 menu-list nav col-12 col-md-auto justify-content-center mb-md-0">
                <li><a href="#" class="px-2 nav-link link-dark fw-bolder">Trang chủ</a></li>
                <li><a href="#" class="px-2 nav-link link-secondary text-gray">Về chúng tôi</a></li>
                <li><a href="#" class="px-2 nav-link link-secondary text-gray">Du học</a></li>
                <li><a href="#" class="px-2 nav-link link-secondary text-gray">Đào tạo </a></li>
                <li><a href="#" class="px-2 nav-link link-secondary text-gray">Cẩm nang</a></li>
            </ul>
            <div class="btn-login">
                @if(Auth::user())
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="button" class="btn-account btn-primary">
                            <a href="./dangnhap.html"> Tài khoản</a>
                        </button>
                        <button type="submit" class="btn-account">Đăng xuất</button>
                    </form>
                @else
                <button type="button" class="btn-account btn-primary">
                    <a href="{{route('login')}}"> Đăng nhập</a>
                </button>
                @endif
            </div>
            <div class="menu-icon">
                <img src="./assets/svg/menu_nav.svg" alt="">
            </div>
        </div>
        @if(Auth::user() && !Auth::user()->hasVerifiedEmail())
            <div class="text-center">
                <p class="alert alert-danger">Tài khoản của bạn chưa được xác minh. Click vào <a href="{{route('verification.notice')}}">đây</a> để xác minh tài khoản.</p>
            </div>
        @endif
    </div>
</header>
