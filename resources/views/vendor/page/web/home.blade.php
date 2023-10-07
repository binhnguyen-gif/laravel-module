@extends("core::web.master")
@section("seo-meta")
{{--TODO : SEO    --}}
{{--    {!! SeoData::generate($page, 'website') !!}--}}
@endsection
{{--tuỳ biến riêng css tại đây--}}
@section("css-custom")
    <style>
        /*h3 {*/
        /*    color: red !important;*/
        /*}*/
    </style>
@endsection

@section("content")
    <div class="body">
        <div class="slide-form-search">
            <div class="form-search-wrap">
                <div class="container">
                    <div class="mb-3 input-group position-relative form-search-header rounded-pill">
                        <input type="text" class="px-5 border-0 form-control rounded-pill"
                               placeholder="Nhập trực tiếp tên Ngành, tên trường " aria-label="Username" aria-describedby="basic-addon1">
                        <span class="position-absolute form-icon" id="basic-addon1"><img src="./assets/svg/Vector.svg"
                                                                                         alt=""></span>
                    </div>
                </div>
            </div>

        </div>
        <section class="slide-section" style="background-image: url('/assets/images/slidrer__image.png');">
            <div class="overlay">
                <div class="slide-content">
                    <h3 class="slide-content-title">Bạn là đơn vị hoạt động tuyển sinh?</h3>
                    <p class="slide-content-text">Bạn muốn đăng tin tuyển sinh ứng viên tiềm năng</p>
                    <button type="button" class="btn-slider">Tìm ứng viên</button>
                </div>
                <div class="silde-form">
                    <div class="text-black silde-form-title d-flex justify-content-center">
                        <p>Khám phá <span class="text-green">+15.000</span> tin tuyển sinh mới nhất</p>

                    </div>
                    <div class="slide-form-wrap">
                        <div class="slide-form-slect">
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Châu lục</option>
                                <option value="1">Châu Á</option>
                                <option value="2">Châu Âu</option>
                                <option value="3">Châu Mỹ</option>
                                <option value="3">Châu Đại Dương</option>
                            </select>
                        </div>
                        <div class="slide-form-slect">
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Quốc gia</option>
                                <option value="1">Mỹ</option>
                                <option value="2">Canada</option>
                                <option value="3">Anh</option>
                                <option value="3">Pháp</option>
                            </select>
                        </div>
                        <div class="slide-form-slect">
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Tỉnh/Thành phố</option>
                                <option value="1">Hà Nội</option>
                                <option value="2">TP Hồ Chí Minh</option>
                                <option value="3">New York</option>
                                <option value="3">Lodon</option>
                            </select>
                        </div>
                        <div class="slide-form-slect">
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Bậc học</option>
                                <option value="1">Cử nhân</option>
                                <option value="2">Thạc sĩ</option>
                                <option value="3">Tiến sĩ</option>
                            </select>
                        </div>
                        <div class="slide-form-slect">
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Khối ngành</option>
                                <option value="1">Công nghệ</option>
                                <option value="2">Kinh tế</option>
                                <option value="3">Truyền thông</option>
                            </select>
                        </div>
                    </div>
                    <div class="slide-form-search">
                        <div class=" input-group position-relative form-search rounded-pill">
                            <input type="text" class="px-5 border-0 form-control rounded-pill"
                                   placeholder="Nhập trực tiếp tên Ngành, tên trường bạn muốn tìm..." aria-label="Username"
                                   aria-describedby="basic-addon1">
                            <span class="position-absolute form-icon" id="basic-addon1"><img src="./assets/svg/Vector.svg"
                                                                                             alt=""></span>
                        </div>
                        <button type="button" class="btn-form-search">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-news">
            <div class="header-title container">
                <h2 class="title">Tin tuyển sinh tốt nhất</h2>
                <p class="title-see"><a href="">Xem thêm</a></p>
            </div>
            <div class="container">
                <div class="news-slider-wrap">
                    <div class="news-slider grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>

                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_2.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_3.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_5.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_4.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="news-slider grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_2.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_3.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_5.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_4.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="news-slider grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_2.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_3.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_5.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_4.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="news-slider grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_2.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_3.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_5.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_4.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid privacy-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrap d-flex justify-content-between">
                    <button class="btn-pagination news-prev">
                        <img src="./assets/svg/pre_btn.svg" alt="">
                    </button>
                    <div class="dot-wrap">
                    </div>
                    <button class="btn-pagination news-next">
                        <img src="./assets/svg/next_btn.svg" alt="">
                    </button>
                </div>
                <div class="btn-more">
                    <span>Xem thêm</span>
                    <img src="./assets/svg/btn-more.svg" alt="">
                </div>
            </div>
        </section>
        <section class="section-banner section-banner-white">
            <div class="container">
                <div class="banner-wrap">
                    <img src="./assets/images/banner_1.png" alt="">
                    <img src="./assets/images/banner_2.png" alt="" class="banner-hidden">
                </div>
            </div>
        </section>
        <section class="section-trend ">
            <div class="header-title container">
                <h2 class="title">Xu hướng</h2>
                <p class="title-see"><a href="">Xem thêm</a></p>
            </div>
            <div class="tab-content container">
                <div class="tab-selection">
                    <div class="tab-active">Đại học</div>
                    <div class="tab">Cao đẳng - Trung cấp</div>
                    <div class="tab">THPT</div>
                    <div class="tab">THCS</div>
                    <div class="tab">Mầm non</div>
                    <div class="tab">Trung tâm</div>
                </div>
            </div>
            <div class="container">
                <div class="grid-col-4 d-grid trend-slider">
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_1.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Bách Khoa Hà Nội <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_2.png');">
                            <div class="school-rate">
                                <p>5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Ngoại Thương Hà Nội <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_5.png');">
                            <div class="school-rate">
                                <p>3.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Học Viện Tài Chính <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item ">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_4.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Quốc Gia Hà Nội <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_5.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Học Viện Tài Chính <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_3.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Học Viện Kỹ thuật Mật mã <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_6.png');">
                            <div class="school-rate">
                                <p>5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Vinuni <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_1.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Bách Khoa Hà Nội <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_7.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Thương Mại <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_8.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Học viện Báo chí Tuyên truyền <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_8.png');">
                            <div class="school-rate">
                                <p>5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Học viện Báo chí Tuyên truyền <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-trend">
                        <div class="image-trend" style="background-image: url('/assets/images/trend_9.png');">
                            <div class="school-rate">
                                <p>4.5</p>
                                <img src="./assets/svg/star.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="box-content-title">
                                <p class="">Đại học Lạc Hồng <img src="./assets/svg/tick1.svg" alt="" class=""></p>
                            </div>
                            <p class="text">Hanoi University of Science and Technology (HUST)</p>
                            <div class="d-flex box-icon flex-column justify-content-between">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_fill.svg" alt="" class="pt-2">
                                    <span class="ps-2">58 P. Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/tag.svg" alt="">
                                    <span class="ps-2">23 Chuyên ngành đào tạo</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="./assets/svg/user.svg" alt="">
                                    <span class="ps-2">21.597 Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-more">
                    <span>Xem thêm</span>
                    <img src="./assets/svg/btn-more.svg" alt="">
                </div>
            </div>
        </section>
        <section class="section-list ">
            <div class="header-title container">
                <h2 class="title">Danh sách thống kê</h2>
            </div>

            <div class="container">
                <div class="tab-selection">
                    <div class="tab-active">Danh sách các trường</div>
                    <div class="tab">Danh sách các trung tâm</div>
                </div>
            </div>
            <div class="grid-col-3 d-grid list-slider container">
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Bậc Đại học</p>
                        <p class="text-box">121 trường</p>
                    </div>
                </div>
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Trung Học Phổ Thông</p>
                        <p class="text-box">122 trường</p>
                    </div>
                </div>
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Trung Học Cơ Sở</p>
                        <p class="text-box">123 trường</p>
                    </div>
                </div>
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Cao đẳng - Trung cấp</p>
                        <p class="text-box">124 trường</p>
                    </div>
                </div>
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Tiểu học</p>
                        <p class="text-box">125 trường</p>
                    </div>
                </div>
                <div class="box-list" style="background-image: url('/assets/images/img_list.png');">
                    <div class="overlay-box">
                        <p class="title-box">Mầm non</p>
                        <p class="text-box">126 trường</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="section-best ">
            <div class="header-title container">
                <h2 class="title">Tin tuyển sinh tốt nhất</h2>
                <p class="title-see"><a href="">Xem thêm</a></p>
            </div>
            <div class="container">
                <div class="tab-selection">
                    <div class="tab-active">Chương trình ngắn hạn</div>
                    <div class="tab">Chương trình dài hạn</div>
                </div>
                <div class="best-slider">
                    <div class=" grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" grid-col-3 d-grid">
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid item-hidden">
                            <img src="./assets/svg/news_1.svg" alt="" class="box-image">
                            <div>
                                <h4>Chương trình Đào tạo Nguyên lý kế toán - Tài chính Ngân hàng</h4>
                                <div class="box-content-school">
                                    <p class="">Đại học Ngoại Thương Hà Nội<img src="./assets/svg/tick1.svg" alt=""></p>
                                </div>
                                <div class="box-time">
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/time clock.svg" alt="">
                                        <span class="">36 tháng</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/location address.svg" alt="">
                                        <span class="">Hà Nội</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="./assets/svg/calendar.svg" alt="">
                                        <span class="">30/05/2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="pagination-wrap d-flex justify-content-between">
                    <button class="btn-pagination best-prev">
                        <img src="./assets/svg/pre_btn.svg" alt="">
                    </button>
                    <div class="dot-wrap-best">
                    </div>
                    <button class="btn-pagination best-next">
                        <img src="./assets/svg/next_btn.svg" alt="">
                    </button>
                </div>
                <div class="btn-more">
                    <span>Xem thêm</span>
                    <img src="./assets/svg/btn-more.svg" alt="">
                </div>
            </div>
        </section>
        <section class="section-industry ">
            <div class="header-title container">
                <h2 class="title">Theo khối ngành</h2>
            </div>
            <div class="container ">
                <div class="industry-slider">
                    <div class="grid-col-4 d-grid">
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>

                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>

                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>

                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>

                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry.svg" alt="">
                            <div>
                                <p class="title-industry">Cơ khí - Kỹ thuật</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_1.svg" alt="">
                            <div>
                                <p class="title-industry">Truyền thông - Quảng cáo</p>
                                <p class="text-industry">1246 tin tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-industry">
                            <img src="./assets/svg/industry_2.svg" alt="">
                            <div>
                                <p class="title-industry">Tài chính - Ngân hàng</p>
                                <p class="text-industry">1245 tin tuyển sinh</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pagination-wrap d-flex justify-content-between">
                    <button class="btn-pagination industry-prev">
                        <img src="./assets/svg/pre_btn.svg" alt="">
                    </button>
                    <div class="dot-wrap-industry">
                    </div>
                    <button class="btn-pagination industry-next">
                        <img src="./assets/svg/next_btn.svg" alt="">
                    </button>
                </div>
                <div class="industry-slider-mobile grid-col-3 list-slider">
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                    <div class="box-industry">
                        <img src="./assets/svg/industry.svg" alt="">
                        <div>
                            <p class="title-industry">Cơ khí - Kỹ thuật</p>
                            <p class="text-industry">1245 tin tuyển sinh</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-course ">
            <div class="header-title container">
                <h2 class="title">Khóa học ngắn hạn</h2>
                <p class="title-see"><a href="">Xem thêm</a></p>
            </div>
            <div class="container">
                <div class="course-slider">
                    <div class="grid-col-4 d-grid">
                        <div class="box-course" style="background-image: url('/assets/images/course.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_2.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_3.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_4.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_5.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_6.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_7.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_8.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-course" style="background-image: url('/assets/images/course.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_2.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_3.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_4.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_5.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_6.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_7.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_8.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-course" style="background-image: url('/assets/images/course.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_2.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_3.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_4.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_5.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_6.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_7.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_8.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col-4 d-grid">
                        <div class="box-course" style="background-image: url('/assets/images/course.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_2.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_3.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_4.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_5.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_6.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_7.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                        <div class="box-course" style="background-image: url('/assets/images/open-course_8.png');">
                            <div class="overlay-box">
                                <p class="title-box">Digital Marketing</p>
                                <p class="text-box">(1252 tin tuyển)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrap d-flex justify-content-between">
                    <button class="btn-pagination course-prev">
                        <img src="./assets/svg/pre_btn.svg" alt="">
                    </button>
                    <div class="dot-wrap-course">
                    </div>
                    <button class="btn-pagination course-next">
                        <img src="./assets/svg/next_btn.svg" alt="">
                    </button>
                </div>
        </section>
        <section class="section-open-course ">
            <div class="header-title container">
                <h2 class="title">Khóa học ngắn hạn sắp diễn ra</h2>
                <p class="title-see"><a href="">Xem thêm</a></p>
            </div>

            <div class="container">
                <div class="grid-col-4 d-grid open-course-slider">
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-open-course">
                        <div class="image-open-course position-relative"
                             style="background-image: url('/assets/images/open-course.png');">
                            <div class="open-course-tag">Lập trình PLC</div>
                            <div class="open-course-play">
                                <img src="./assets/svg/btn-play.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Thiết kế Tủ điện với Lập trình PLC</h4>
                            <div class="rate">
                                <div class="star">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                    <img src="./assets/svg/star.svg" alt="">
                                </div>
                                <p class="rate_point">4.8</p>
                                <p class="rate_quatity">121 đánh giá</p>
                            </div>
                            <p class="text">Giảng viên Nguyễn Huy Hoàng</p>
                            <div class="box-icon">
                                <div class="icon-item">
                                    <img src="./assets/svg/address_course.svg" alt="" class="">
                                    <span class="">Đại học Hà Nội</span>
                                </div>
                                <div class="icon-item">
                                    <img src="./assets/svg/time_course.svg" alt="">
                                    <span class="">Khai giảng: 10/09/2021 (20 buổi)</span>
                                </div>
                            </div>
                            <div class="open-course_price">
                                <p class="price">399,000 ₫</p>
                                <p class="old-price">750.000 VND</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-more">
                    <span>Xem thêm</span>
                    <img src="./assets/svg/btn-more.svg" alt="">
                </div>
            </div>
        </section>
        <section class="section-banner">
            <div class="container">
                <div class="banner-wrap">
                    <img src="./assets/images/banner_1.png" alt="">
                    <img src="./assets/images/banner_2.png" alt="" class="banner-hidden">
                </div>
            </div>
        </section>
        <section class="section-news-list">
            <div class="container">
                <div class="pt-4 grid-col-3 d-grid">
                    <div class="news-list-topic">
                        <div class="pb-2 news-title">
                            <div class="line"></div>
                            <h4 class="news-header-text">Tin giáo dục</h4>
                        </div>
                        <div class="header-title">
                            <div class="title-left">
                                <div class="line-new"></div>
                                <h2 class="title">Tin tuyển sinh tốt nhất</h2>
                            </div>
                            <p class="title-see"><a href="">Xem thêm</a></p>
                        </div>
                        <div class="box-news">
                            <img src="./assets/images/news.png" alt="" class="image-trend">
                            <div class="box-content">
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                                <h4>Sự lên ngôi của Công nghệ thông tin trong thời đại 4.0?</h4>
                                <div class="news-tag">
                                    <p>#it</p>
                                    <p>#cntt</p>
                                    <p>#fpt</p>
                                    <p>#huong_nghiep</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="btn-more">
                            <span>Xem thêm</span>
                            <img src="./assets/svg/btn-more.svg" alt="">
                        </div>
                    </div>
                    <div class="news-list-topic">
                        <div class="pb-2 news-title">
                            <div class="line"></div>
                            <h4 class="news-header-text">Tin giáo dục</h4>
                        </div>
                        <div class="header-title ">
                            <div class="title-left">
                                <div class="line-new"></div>
                                <h2 class="title">Tin tuyển sinh tốt nhất</h2>
                            </div>
                            <p class="title-see"><a href="">Xem thêm</a></p>
                        </div>
                        <div class="box-news">
                            <img src="./assets/images/news.png" alt="" class="image-trend">
                            <div class="box-content">
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                                <h4>Sự lên ngôi của Công nghệ thông tin trong thời đại 4.0?</h4>
                                <div class="news-tag">
                                    <p>#it</p>
                                    <p>#cntt</p>
                                    <p>#fpt</p>
                                    <p>#huong_nghiep</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="btn-more">
                            <span>Xem thêm</span>
                            <img src="./assets/svg/btn-more.svg" alt="">
                        </div>
                    </div>
                    <div class="news-list-topic">
                        <div class="pb-2 news-title">
                            <div class="line"></div>
                            <h4 class="news-header-text">Tin giáo dục</h4>
                        </div>
                        <div class="header-title ">
                            <div class="title-left">
                                <div class="line-new"></div>
                                <h2 class="title">Tin tuyển sinh tốt nhất</h2>
                            </div>
                            <p class="title-see"><a href="">Xem thêm</a></p>
                        </div>
                        <div class="box-news">
                            <img src="./assets/images/news.png" alt="" class="image-trend">
                            <div class="box-content">
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                                <h4>Sự lên ngôi của Công nghệ thông tin trong thời đại 4.0?</h4>
                                <div class="news-tag">
                                    <p>#it</p>
                                    <p>#cntt</p>
                                    <p>#fpt</p>
                                    <p>#huong_nghiep</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="box-news_short">
                            <img src="./assets/images/news_1.png" alt="" class="image-news">
                            <div class="box-content">
                                <h4>ĐH Bách Khoa Hà Nội: Nhiều "tân sinh viên" không được tiếp tục theo học</h4>
                                <p class="hours">1 giờ trước - Tuyển sinh</p>
                            </div>
                        </div>
                        <div class="btn-more">
                            <span>Xem thêm</span>
                            <img src="./assets/svg/btn-more.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")
    <script>
        $(document).ready(function () {
            $('.news-slider-wrap').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: $('.news-prev'),
                nextArrow: $('.news-next'),
                appendDots: $('.dot-wrap'),
            });
        });
        $(document).ready(function () {
            $('.best-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: $('.best-prev'),
                nextArrow: $('.best-next'),
                appendDots: $('.dot-wrap-best'),
            });
        });
        $(document).ready(function () {
            $('.industry-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: $('.industry-prev'),
                nextArrow: $('.industry-next'),
                appendDots: $('.dot-wrap-industry'),
            });
        });
        $(document).ready(function () {
            $('.course-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: $('.course-prev'),
                nextArrow: $('.course-next'),
                appendDots: $('.dot-wrap-course'),
            });
        });
        $(document).ready(function () {
            $('.industry-slider-mobile').slick({
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: false,
                prevArrow: false,
                nextArrow: false,
            });
        });
        $(window).on('load resize orientationchange', function () {
            $('.trend-slider').each(function () {
                var $carousel = $(this);
                if ($(window).width() > 640) {
                    if ($carousel.hasClass('slick-initialized')) {
                        $carousel.slick('unslick');
                    }
                } else {
                    if (!$carousel.hasClass('slick-initialized')) {
                        $carousel.slick({
                            infinite: true,
                            speed: 300,
                            slidesToShow: 1,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            dots: false,
                            prevArrow: false,
                            nextArrow: false,
                        });
                    }
                }
            });
        });
        $(window).on('load resize orientationchange', function () {
            $('.list-slider').each(function () {
                var $carousel = $(this);
                if ($(window).width() > 640) {
                    if ($carousel.hasClass('slick-initialized')) {
                        $carousel.slick('unslick');
                    }
                } else {
                    if (!$carousel.hasClass('slick-initialized')) {
                        $carousel.slick({
                            infinite: true,
                            speed: 300,
                            slidesToShow: 1,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            dots: false,
                            prevArrow: false,
                            nextArrow: false,
                        });
                    }
                }
            });
        });
        $(window).on('load resize orientationchange', function () {
            $('.open-course-slider').each(function () {
                var $carousel = $(this);
                if ($(window).width() > 640) {
                    if ($carousel.hasClass('slick-initialized')) {
                        $carousel.slick('unslick');
                    }
                } else {
                    if (!$carousel.hasClass('slick-initialized')) {
                        $carousel.slick({
                            infinite: true,
                            speed: 300,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            dots: false,
                            prevArrow: false,
                            nextArrow: false,

                        });
                    }
                }
            });
        });


        // Click drop down
        document.getElementById('btn-industry').onclick = function () {
            let btnDownIndustry = document.getElementById('btn-down-industry')
            let btnUpIndustry = document.getElementById('btn-up-industry')
            let contactEl = document.getElementById("content-industry")
            if (contactEl.offsetHeight == 72 || contactEl.offsetHeight == 48) {
                contactEl.style.height = "auto"
                btnUpIndustry.style.display = "block"
                btnDownIndustry.style.display = "none"
            } else {
                if ($(window).width() > 640) {
                    btnUpIndustry.style.display = "none"
                    btnDownIndustry.style.display = "block"
                    contactEl.style.height = "72px"
                } else {
                    btnUpIndustry.style.display = "none"
                    btnDownIndustry.style.display = "block"
                    contactEl.style.height = "48px"
                }
            }

        };
        document.getElementById('btn-location').onclick = function () {
            let btnDownLocation = document.getElementById('btn-down-location')
            let btnUpLocation = document.getElementById('btn-up-location')
            let contactEl = document.getElementById("content-location")
            if (contactEl.offsetHeight == 72 || contactEl.offsetHeight == 48) {
                contactEl.style.height = "auto"
                btnDownLocation.style.display = "none"
                btnUpLocation.style.display = "block"
            } else {
                if ($(window).width() > 640) {
                    btnDownLocation.style.display = "block"
                    btnUpLocation.style.display = "none"
                    contactEl.style.height = "72px"
                } else {
                    btnDownLocation.style.display = "block"
                    btnUpLocation.style.display = "none"
                    contactEl.style.height = "48px"
                }
            }
        };
        document.getElementById('btn-study').onclick = function () {
            let btnDownStudy = document.getElementById('btn-down-study')
            let btnUpStudy = document.getElementById('btn-up-study')
            let contactEl = document.getElementById("content-study")
            if (contactEl.offsetHeight == 72 || contactEl.offsetHeight == 48) {
                contactEl.style.height = "auto"
                btnDownStudy.style.display = "none"
                btnUpStudy.style.display = "block"
            } else {
                if ($(window).width() > 640) {
                    btnDownStudy.style.display = "block"
                    btnUpStudy.style.display = "none"
                    contactEl.style.height = "72px"
                } else {
                    btnDownStudy.style.display = "block"
                    btnUpStudy.style.display = "none"
                    contactEl.style.height = "48px"
                }
            }
        };
        document.getElementById('btn-training').onclick = function () {
            let btnDownTraining = document.getElementById('btn-down-training')
            let btnUpTraining = document.getElementById('btn-up-training')
            let contactEl = document.getElementById("content-training")
            if (contactEl.offsetHeight == 72 || contactEl.offsetHeight == 48 || contactEl.offsetHeight == 48) {
                contactEl.style.height = "auto"
                btnDownTraining.style.display = "none"
                btnUpTraining.style.display = "block"
            } else {
                if ($(window).width() > 640) {
                    btnDownTraining.style.display = "block"
                    btnUpTraining.style.display = "none"
                    contactEl.style.height = "72px"
                } else {
                    btnDownTraining.style.display = "block"
                    btnUpTraining.style.display = "none"
                    contactEl.style.height = "48px"
                }
            }
        };
    </script>
@endsection
