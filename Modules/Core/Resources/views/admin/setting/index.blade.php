@extends('core::layouts.vertical')
@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Setings</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Settings</h4>
        </div>
    </div>
@endsection
@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="true"
                           class="nav-link active">
                            <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                            <span class="d-none d-sm-block">Generate</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="false"
                           class="nav-link">
                            <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                            <span class="d-none d-sm-block">Website</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="#messages1" data-toggle="tab" aria-expanded="false"--}}
{{--                           class="nav-link">--}}
{{--                            <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>--}}
{{--                            <span class="d-none d-sm-block">Messages</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
                <div class="tab-content text-muted">
                    <div class="tab-pane show active" id="home1">
                        @includeIf("core::admin.setting.tabs.generate", ["item" => $item])
                    </div>
                    <div class="tab-pane" id="profile1">
                        @includeIf("core::admin.setting.tabs.website", ["item" => $item])
                    </div>
{{--                    <div class="tab-pane" id="messages1">--}}
{{--                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean--}}
{{--                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque--}}
{{--                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.--}}
{{--                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.--}}
{{--                            Nulla consequat massa quis enim.</p>--}}
{{--                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate--}}
{{--                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,--}}
{{--                            justo. Nullam dictum felis eu pede mollis pretium. Integer--}}
{{--                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean--}}
{{--                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,--}}
{{--                            consequat vitae, eleifend ac, enim.</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
