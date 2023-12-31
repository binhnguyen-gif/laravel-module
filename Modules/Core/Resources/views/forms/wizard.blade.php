@extends('core::layouts.vertical')


@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/libs/smartwizard/smartwizard.min.css') }}" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wizard</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Forms Wizard</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Default wizard</h4>
                <p class="sub-header">Example of Default wizard</p>
                <div id="smartwizard-default">
                    <ul>
                        <li><a href="#sw-default-step-1">Account<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-default-step-2">Profile<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-default-step-3">Finish<small class="d-block">Step description</small></a></li>
                    </ul>

                    <div class="p-3">
                        <div id="sw-default-step-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-default-userName">User name</label>
                                        <input type="text" class="form-control" id="sw-default-userName"
                                            placeholder="Enter User name...">

                                    </div>
                                    <div class="form-group">
                                        <label for="sw-default-password"> Password</label>
                                        <input type="password" id="sw-default-password" class="form-control"
                                            placeholder="Enter Password...">
                                    </div>

                                    <div class="form-group">
                                        <label for="sw-default-confirm">Re Password</label>
                                        <input type="password" id="sw-default-confirm" class="form-control"
                                            placeholder="Enter Re Password...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-default-step-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-default-first-name">First name</label>
                                        <input type="text" id="sw-default-first-name" class="form-control"
                                            placeholder="Enter First name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="sw-default-last-name">Last name</label>
                                        <input type="text" id="sw-default-last-name" class="form-control"
                                            placeholder="Enter Last name...">
                                    </div>

                                    <div class="form-group">
                                        <label for="sw-default-email">Email</label>
                                        <input type="email" id="sw-default-email" class="form-control"
                                            placeholder="Enter Email...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-default-step-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <i class="uil uil-check-square text-success h2"></i>
                                        </div>
                                        <h3>Thank you !</h3>

                                        <p class="w-75 mb-2 mx-auto text-muted">Quisque nec turpis at urna dictum
                                            luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                            dui. Aliquam
                                            mattis dictum aliquet.</p>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="sm-default-customCheck">
                                                <label class="custom-control-label" for="sm-default-customCheck">I agree
                                                    with the Terms and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Arrows in Header</h4>
                <p class="sub-header">Example of arrows wizard</p>
                <div id="smartwizard-arrows">
                    <ul>
                        <li><a href="#sw-arrows-step-1">Account<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-arrows-step-2">Profile<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-arrows-step-3">Finish<small class="d-block">Step description</small></a></li>
                    </ul>

                    <div class="p-3">
                        <div id="sw-arrows-step-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-arrows-userName">User name</label>
                                        <input type="text" class="form-control" id="sw-arrows-userName"
                                            placeholder="Enter User name...">

                                    </div>
                                    <div class="form-group">
                                        <label for="sw-arrows-password"> Password</label>
                                        <input type="password" id="sw-arrows-password" class="form-control"
                                            placeholder="Enter Password...">
                                    </div>

                                    <div class="form-group">
                                        <label for="sw-arrows-confirm">Re Password</label>
                                        <input type="password" id="sw-arrows-confirm" class="form-control"
                                            placeholder="Enter Re Password...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-arrows-step-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-arrows-first-name">First name</label>
                                        <input type="text" id="sw-arrows-first-name" class="form-control"
                                            placeholder="Enter First name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="sw-arrows-last-name">Last name</label>
                                        <input type="text" id="sw-arrows-last-name" class="form-control"
                                            placeholder="Enter Last name...">
                                    </div>

                                    <div class="form-group">
                                        <label for="sw-arrows-email">Email</label>
                                        <input type="email" id="sw-arrows-email" class="form-control"
                                            placeholder="Enter Email...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-arrows-step-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <i class="uil uil-check-square text-success h2"></i>
                                        </div>
                                        <h3>Thank you !</h3>

                                        <p class="w-75 mb-2 mx-auto text-muted">Quisque nec turpis at urna dictum
                                            luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                            dui. Aliquam
                                            mattis dictum aliquet.</p>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="sm-arrows-customCheck">
                                                <label class="custom-control-label" for="sm-arrows-customCheck">I agree
                                                    with the Terms and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Circles in Header</h4>
                <p class="sub-header">Example of Circles wizard</p>
                <div id="smartwizard-circles">
                    <ul>
                        <li><a href="#sw-circles-step-1">01<small class="d-block">Account</small></a></li>
                        <li><a href="#sw-circles-step-2">02<small class="d-block">Profile</small></a></li>
                        <li><a href="#sw-circles-step-3">03<small class="d-block">Finish</small></a></li>
                    </ul>

                    <div class="p-3">
                        <div id="sw-circles-step-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-circles-userName">User name</label>
                                        <input type="text" class="form-control" id="sw-circles-userName"
                                            placeholder="Enter User name...">

                                    </div>
                                    <div class="form-group">
                                        <label for="sw-circles-password"> Password</label>
                                        <input type="password" id="sw-circles-password" class="form-control"
                                            placeholder="Enter Password...">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="sw-circles-confirm">Re Password</label>
                                        <input type="password" id="sw-circles-confirm" class="form-control"
                                            placeholder="Enter Re Password...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-circles-step-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-circles-first-name">First name</label>
                                        <input type="text" id="sw-circles-first-name" class="form-control"
                                            placeholder="Enter First name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="sw-circles-last-name">Last name</label>
                                        <input type="text" id="sw-circles-last-name" class="form-control"
                                            placeholder="Enter Last name...">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="sw-circles-email">Email</label>
                                        <input type="email" id="sw-circles-email" class="form-control"
                                            placeholder="Enter Email...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-circles-step-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <i class="uil uil-check-square text-success h2"></i>
                                        </div>
                                        <h3>Thank you !</h3>

                                        <p class="w-75 mb-2 mx-auto text-muted">Quisque nec turpis at urna dictum
                                            luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                            dui. Aliquam
                                            mattis dictum aliquet.</p>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="sm-circles-customCheck">
                                                <label class="custom-control-label" for="sm-circles-customCheck">I agree
                                                    with the Terms and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Dots in Header</h4>
                <p class="sub-header">Example of Dots wizard</p>
                <div id="smartwizard-dots">
                    <ul>
                        <li><a href="#sw-dots-step-1">Account<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-dots-step-2">Profile<small class="d-block">Step description</small></a></li>
                        <li><a href="#sw-dots-step-3">Finish<small class="d-block">Step description</small></a></li>
                    </ul>

                    <div class="p-3">
                        <div id="sw-dots-step-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-dots-userName">User name</label>
                                        <input type="text" class="form-control" id="sw-dots-userName"
                                            placeholder="Enter User name...">

                                    </div>
                                    <div class="form-group">
                                        <label for="sw-dots-password"> Password</label>
                                        <input type="password" id="sw-dots-password" class="form-control"
                                            placeholder="Enter Password...">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="sw-dots-confirm">Re Password</label>
                                        <input type="password" id="sw-dots-confirm" class="form-control"
                                            placeholder="Enter Re Password...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-dots-step-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sw-dots-first-name">First name</label>
                                        <input type="text" id="sw-dots-first-name" class="form-control"
                                            placeholder="Enter First name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="sw-dots-last-name">Last name</label>
                                        <input type="text" id="sw-dots-last-name" class="form-control"
                                            placeholder="Enter Last name...">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="sw-dots-email">Email</label>
                                        <input type="email" id="sw-dots-email" class="form-control"
                                            placeholder="Enter Email...">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <div id="sw-dots-step-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <i class="uil uil-check-square text-success h2"></i>
                                        </div>
                                        <h3>Thank you !</h3>

                                        <p class="w-75 mb-2 mx-auto text-muted">Quisque nec turpis at urna dictum
                                            luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                            dui. Aliquam
                                            mattis dictum aliquet.</p>

                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="sm-dots-customCheck">
                                                <label class="custom-control-label" for="sm-dots-customCheck">I agree
                                                    with the Terms and Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/smartwizard/smartwizard.min.js') }}"></script>
@endsection

@section('script-bottom')
<script src="{{ URL::asset('assets/js/pages/form-wizard.init.js') }}"></script>
@endsection