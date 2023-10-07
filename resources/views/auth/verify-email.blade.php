{{--<x-app-layout>--}}
@extends("core::web.master")

{{--tuỳ biến riêng css tại đây--}}
@section("css-custom")
@endsection

@section("content")
    <div class="container pt-3" style="min-height: 400px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Xác minh địa chỉ email của bạn') }}</div>

                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                            </div>
                        @endif

                        {{ __('Trước khi tiếp tục, vui lòng kiểm tra email của bạn để biết liên kết xác minh. ') }}
                        {{ __('Nếu bạn không nhận được email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="p-0 m-0 align-baseline btn btn-link">{{ __('click để tạo một yêu cầu mới') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection

{{--</x-app-layout>--}}
