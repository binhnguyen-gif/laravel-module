<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ !empty(setting('favicon')) ? setting('favicon') : URL::asset('assets/images/default/faviicon.png') }}">
    @yield("seo-meta")
    @includeIf("layouts.head")
    @stack('styles')
    {!! setting('style') !!}
    @yield('css-custom')
</head>

<body>
    <div id="app">
        @includeIf("layouts.header")
            @yield('content')
        @includeIf("layouts.footer")
    </div>
    @includeIf("layouts.script")
    @stack('scripts')
    {!! setting('script') !!}
    @yield('js-custom')
</body>

</html>
