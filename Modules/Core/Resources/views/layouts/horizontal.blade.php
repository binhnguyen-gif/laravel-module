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

    @include('core::layouts.shared.head')

</head>

<body data-layout="topnav">

    <div id="wrapper">
        @include('core::layouts.shared.navbar')

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
