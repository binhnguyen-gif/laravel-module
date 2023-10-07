{{--<x-app-layout>--}}
@extends("core::web.master")

{{--tuỳ biến riêng css tại đây--}}
@section("css-custom")
@endsection

@section("content")
    <div class="container pt-3" style="min-height: 200px">
        <div class="alert alert-success text-center" role="alert">
            {{ __('Tài khoản của bạn đã được xác minh thành công.') }}
        </div>
    </div>
@endsection


{{--Xử lý js riêng tại đây--}}
@section("js-custom")

@endsection

{{--</x-app-layout>--}}
