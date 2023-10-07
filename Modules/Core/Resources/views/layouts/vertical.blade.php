<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name=”robots” content=”none” />

    @if(config('core.dashboard.is_dark'))
        @include('core::layouts.shared.head', ['isDark' => true])
    @elseif(isset($isRTL) && $isRTL)
        @include('core::layouts.shared.head', ['isRTL' => true])
    @else
        @include('core::layouts.shared.head')
    @endif

</head>

@if(config('core.dashboard.is_dark_sidebar'))
    <body class="left-side-menu-dark">
@elseif(config('core.dashboard.is_condensed'))
    <body class="left-side-menu-condensed" data-left-keep-condensed="true">
@else
    <body>
@endif

@if(isset($withLoader) && $withLoader)
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
        </div>
    </div>
</div>
<!-- End Preloader-->
@endif

    <div id="wrapper">

        @include('core::layouts.shared.header')
        @include('core::layouts.shared.sidebar')

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('breadcrumb')
                    @yield('content')
                </div>
            </div>

            @include('core::layouts.shared.footer')
        </div>
    </div>

    @include('core::layouts.shared.rightbar')

    @include('core::layouts.shared.footer-script')

</body>

</html>
