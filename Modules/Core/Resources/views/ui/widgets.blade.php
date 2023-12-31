@extends('core::layouts.vertical')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Widgets</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Widgets</h4>
    </div>
</div>
@endsection

@section('content')
<!-- stats with icon -->
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                            Revenue</span>
                        <h2 class="mb-0">$2100</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-primary" data-feather="shopping-bag"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                            Sold</span>
                        <h2 class="mb-0">1065</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-warning" data-feather="coffee"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                            Customers</span>
                        <h2 class="mb-0">11</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-success" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                            Visitors</span>
                        <h2 class="mb-0">750</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-info" data-feather="file-text"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="p-3">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                        Revenue</span>
                    <h3>$2100</h3>
                    <div class="progress my-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 32%" aria-valuenow="32"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted font-weight-semibold">36% Avg</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="p-3">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                        Sold</span>
                    <h3>1021</h3>
                    <div class="progress my-2" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted font-weight-semibold">36 Daily Avg</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="p-3">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                        Customers</span>
                    <h3>11</h3>
                    <div class="progress my-2" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted font-weight-semibold">3 Daily Avg</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="p-3">
                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                        Visitors</span>
                    <h3>1021</h3>
                    <div class="progress my-2" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="text-muted font-weight-semibold">300 Daily Avg</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- charts -->
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                            Revenue</span>
                        <h2 class="mb-0">$2100</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-revenue-chart" class="apex-charts"></div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            10.21%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                            Sold</span>
                        <h2 class="mb-0">1065</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-product-sold-chart" class="apex-charts">
                        </div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            5.05%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                            Customers</span>
                        <h2 class="mb-0">11</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-customer-chart" class="apex-charts">
                        </div>
                        <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i>
                            25.16%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                            Visitors</span>
                        <h2 class="mb-0">750</h2>
                    </div>
                    <div class="align-self-center">
                        <div id="today-new-visitors-chart" class="apex-charts">
                        </div>
                        <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i>
                            5.05%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div id="traffic-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div id="customers-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div id="revenue-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>

<h5 class="mb-4">Profile/User</h5>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body pb-0">
                <div class="text-center mt-3">
                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-xl rounded-circle" />
                    <h5 class="mt-2 mb-0">Shreyu N</h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-4">User Experience
                        Specialist
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                    <button type="button" class="btn btn-white btn-sm">Message</button>

                    <div class="mt-4 pt-3 border-top text-left">
                        <p class="text-muted mb-2">Hi I'm Shreyu. I am user experience and user
                            interface designer.
                            I have been working on UI & UX since last 10 years.</p>

                        <p class="mb-2">
                            <label class="badge badge-soft-success">UI & UX</label>
                            <label class="badge badge-soft-success">Frontend Development</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card profile-widget">
            <img src="/assets/images/covers/2.jpg" alt="Shreyu" class="card-img-top" />
            <div class="dropdown card-action float-right">
                <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                    <i class="uil uil-ellipsis-v font-size-16 text-white"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-edit-alt mr-2"></i>Edit</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-refresh mr-2"></i>Refresh</a>
                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                            class="uil uil-trash mr-2"></i>Delete</a>
                </div>
            </div>

            <div class="card-body text-center p-0">
                <div class="profile-info pb-3">
                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="img-thumbnail avatar-xl rounded-circle" />
                    <h5 class="mt-2 mb-0">Shreyu N</h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-4">User Experience
                        Specialist
                    </h6>
                    <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                    <button type="button" class="btn btn-white btn-sm">Message</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img src="/assets/images/users/avatar-7.jpg" class="avatar-lg rounded-circle mr-2" alt="shreyu">
                    <div class="media-body">
                        <h5 class="mt-2 mb-0">Shreyu N</h5>
                        <h6 class="text-muted font-weight-normal mt-1 mb-4">New York, USA</h6>
                    </div>
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-refresh mr-2"></i>Refresh</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>

                <div class="mt-2 mb-3 row justify-content-between">
                    <div class="col-sm-5">
                        <span class="font-size-15"><i class='uil uil-calendar-alt mr-1'></i>40 Days
                            Ago</span>
                    </div>
                    <div class="col-sm mt-2 mt-sm-0">
                        <span class="font-size-15"><i class='uil uil-users-alt mr-1'></i>12,001</span>
                    </div>
                    <div class="col-sm mt-2 mt-sm-0 text-sm-right">
                        <span class="font-size-15"><i class='uil uil-calendar-alt mr-1'></i>1200</span>
                    </div>
                </div>

                <div class="mt-1 pt-2 border-top text-left">
                    <p class="text-muted mb-2">Hi I'm Shreyu. I am foodie and love to eat different
                        cuisine!</p>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col">
                        <img src="/assets/images/small/img-4.jpg" alt="" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col">
                        <img src="/assets/images/small/img-5.jpg" alt="" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col">
                        <img src="/assets/images/small/img-6.jpg" alt="" class="img-fluid rounded shadow" />
                    </div>
                </div>

                <div class="row mt-5 text-center">
                    <div class="col">
                        <button type="button" class="btn btn-primary btn-block mr-1">Follow</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-white btn-block">Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/assets/images/users/avatar-7.jpg" class="card-img" alt="shreyu" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Shreyu N</h5>
                        <h6 class="text-muted font-weight-normal mt-0 mb-3">New York, USA</h6>
                        <div class="card-text row text-center">
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-sm btn-block mr-1">Follow</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-white btn-sm btn-block">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-3">
                <div class="media">
                    <img src="/assets/images/users/avatar-7.jpg" class="mr-3 avatar-lg rounded" alt="shreyu">
                    <div class="media-body">
                        <h5 class="mt-1 mb-0">Shreyu N</h5>
                        <h6 class="font-weight-normal mt-1 mb-1">
                            <a href="">@shreyu</a>
                        </h6>
                        <p class="text-muted">Designer | Creative | Thinker</p>
                    </div>
                </div>
                <div class="row mt-2 border-top pt-2">
                    <div class="col">
                        <div class="media">
                            <span class="icon-dual align-self-center mr-2" data-feather="users"></span>
                            <div class="media-body">
                                <h5 class="mt-2 pt-1 mb-0 font-size-16">1.9M</h5>
                                <h6 class="font-weight-normal mt-0">Followers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media">
                            <span class="icon-dual align-self-center mr-2" data-feather="eye"></span>
                            <div class="media-body">
                                <h5 class="mt-2 pt-1 mb-0 font-size-16">19M</h5>
                                <h6 class="font-weight-normal mt-0">Views</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media">
                            <span class="icon-dual align-self-center mr-2" data-feather="file-text"></span>
                            <div class="media-body">
                                <h5 class="mt-2 pt-1 mb-0 font-size-16">1k</h5>
                                <h6 class="font-weight-normal mt-0">Posts</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 text-center">
                    <div class="col">
                        <button type="button" class="btn btn-primary btn-sm btn-block mr-1">Follow</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-white btn-sm btn-block">Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h5 class="mb-4">Team</h5>
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body pt-2">
                <h6 class="header-title mb-4">Team Members</h6>
                <div class="media border-top pt-3">
                    <img src="/assets/images/users/avatar-7.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Shreyu N</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Senior Sales Guy</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove
                                from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="/assets/images/users/avatar-9.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Greeva Y</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Social Media Campaign</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove
                                from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="/assets/images/users/avatar-4.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Nik G</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Inventory Manager</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove
                                from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="media mt-1 border-top pt-3">
                    <img src="/assets/images/users/avatar-1.jpg" class="avatar rounded mr-3" alt="shreyu">
                    <div class="media-body">
                        <h6 class="mt-1 mb-0 font-size-15">Hardik G</h6>
                        <h6 class="text-muted font-weight-normal mt-1 mb-3">Sales Person</h6>
                    </div>
                    <div class="dropdown align-self-center float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    class="uil uil-edit-alt mr-2"></i>Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-exit mr-2"></i>Remove
                                from Team</a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                    class="uil uil-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body pt-2">
                <div class="dropdown mt-2 float-right">
                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="uil uil-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="uil uil-refresh mr-2"></i>Refresh</a>
                        <div class="dropdown-divider"></div>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                class="uil uil-trash mr-2"></i>Delete</a>
                    </div>
                </div>
                <h6 class="header-title mb-4">Team Events</h6>

                <div class="row calendar-widget">
                    <div class="col-sm-6">
                        <div id="calendar-widget"></div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled ml-sm-3 pl-sm-5 mt-4 mt-sm-0">
                            <li class="mb-4">
                                <p class="text-muted mb-0 font-size-13">
                                    <i class="uil uil-calender mr-1"></i>7:30 AM - 10:00 AM
                                </p>
                                <h6 class="mt-1 font-size-16">UX Planning Meeting</h6>
                            </li>
                            <li class="mb-4">
                                <p class="text-muted mb-0 font-size-13">
                                    <i class="uil uil-calender mr-1"></i>10:30 AM - 11:45 AM
                                </p>
                                <h6 class="mt-1 font-size-16">Hyper v3 Scope Review</h6>
                            </li>
                            <li class="mb-4">
                                <p class="text-muted mb-0 font-size-13">
                                    <i class="uil uil-calender mr-1"></i>12:15 PM - 02:00 PM
                                </p>
                                <h6 class="mt-1 font-size-16">Ubold v4 Brainstorming</h6>
                            </li>
                            <li class="mb-4">
                                <p class="text-muted mb-0 font-size-13">
                                    <i class="uil uil-calender mr-1"></i>5:30 PM - 06:15 PM
                                </p>
                                <h6 class="mt-1 font-size-16">Shreyu React Planning</h6>
                            </li>
                            <li>
                                <a href="" class="btn btn-primary btn-block w-75 mb-0"><i
                                        class="uil uil-focus-add mr-2"></i>Add Event</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body pt-2">
                <div class="dropdown mt-2 float-right">
                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="uil uil-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="uil uil-refresh mr-2"></i>Refresh</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i class="uil uil-user-plus mr-2"></i>Add
                            Member</a>
                        <div class="dropdown-divider"></div>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                class="uil uil-exit mr-2"></i>Exit</a>
                    </div>
                </div>
                <h6 class="header-title mb-4">Team Chat</h6>
                <div class="chat-conversation">
                    <ul class="conversation-list slimscroll" style="max-height: 268px;">
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="/assets/images/users/avatar-9.jpg" alt="Female">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Greeva</i>
                                    <p>
                                        Hello!
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="/assets/images/users/avatar-7.jpg" alt="Male">
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu</i>
                                    <p>
                                        Hi, How are you? What about our next meeting?
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="/assets/images/users/avatar-9.jpg" alt="female">
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Greeva</i>
                                    <p>
                                        Yeah everything is fine
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="/assets/images/users/avatar-7.jpg" alt="male">
                                <i>10:02</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu</i>
                                    <p>
                                        Awesome! let me know if we can talk in 20 min
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control chat-input" placeholder="Enter your text"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter your messsage
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit"
                                    class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end .chat-conversation-->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- overview -->
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body pt-2">
                <h6 class="header-title mb-0 pb-3">Stats</h6>

                <!-- stat 1 -->
                <div class="media px-3 py-3 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22">2100</h4>
                        <span class="text-muted">Total Tasks Completed</span>
                    </div>
                    <i data-feather="package" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 2 -->
                <div class="media px-3 py-3 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22">21,000</h4>
                        <span class="text-muted">Total Hours Worked</span>
                    </div>
                    <i data-feather="clock" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 3 -->
                <div class="media px-3 py-3 border-bottom">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22">1095</h4>
                        <span class="text-muted">Total Issues Fixed</span>
                    </div>
                    <i data-feather="briefcase" class="align-self-center icon-dual icon-lg"></i>
                </div>

                <!-- stat 4 -->
                <div class="media px-3 pt-3">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 font-size-22">51,200</h4>
                        <span class="text-muted">Total Commits</span>
                    </div>
                    <i data-feather="tag" class="align-self-center icon-dual icon-lg"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- tasks -->
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body pt-2 pb-3">
                <a href="task-list.html" class="btn btn-primary btn-sm mt-2 float-right">
                    View All
                </a>
                <h6 class="header-title mb-4">Tasks</h6>

                <div class="row">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="task1">
                            <label class="custom-control-label" for="task1">
                                Draft the new contract document for
                                sales team
                            </label>
                            <p class="font-size-13 text-muted">Due on 24 Aug, 2019</p>
                        </div> <!-- end checkbox -->
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="task2">
                            <label class="custom-control-label" for="task2">
                                iOS App home page
                            </label>
                            <p class="font-size-13 text-muted">Due on 23 Aug, 2019</p>
                        </div> <!-- end checkbox -->
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="task3">
                            <label class="custom-control-label" for="task3">
                                Write a release note for Shreyu
                            </label>
                            <p class="font-size-13 text-muted">Due on 22 Aug, 2019</p>
                        </div> <!-- end checkbox -->
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="task4">
                            <label class="custom-control-label" for="task4">
                                Invite Greeva to a project shreyu admin
                            </label>
                            <p class="font-size-13 text-muted">Due on 21 Aug, 2019</p>
                        </div> <!-- end checkbox -->
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="task5">
                            <label class="custom-control-label" for="task5">
                                Enable analytics tracking for main website
                            </label>
                            <p class="font-size-13 text-muted">Due on 20 Aug, 2019</p>
                        </div> <!-- end checkbox -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- activities -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body pt-2 pb-3">
                <a href="/" class="btn btn-primary btn-sm mt-2 float-right">
                    View All
                </a>
                <h6 class="header-title mb-4">Activities</h6>

                <div class="media">
                    <img src="/assets/images/users/avatar-7.jpg" class="mr-3 avatar rounded-circle" alt="shreyu" />
                    <div class="media-body">
                        <h6 class="mt-0 mb-0 font-size-15 font-weight-normal">
                            <a href="" class="font-weight-bold">Shreyu</a> has attached design-draft.sketch in project
                            <span class="font-weight-bold text-primary">Admin</span>
                        </h6>
                        <p class="text-muted">2 Min Ago</p>
                    </div>
                </div>

                <div class="media mt-3">
                    <div class="avatar mr-3 font-size-24 font-weight-normal">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">G</span>
                    </div>
                    <div class="media-body">
                        <h6 class="mt-0 mb-0 font-size-15 font-weight-normal">
                            <a href="" class="font-weight-bold">Greeva</a> has commented on project <span
                                class="font-weight-bold text-primary">Admin</span>
                        </h6>
                        <p class="text-muted">12 Min Ago</p>
                    </div>
                </div>

                <div class="media mt-3">
                    <img src="/assets/images/users/avatar-9.jpg" class="mr-3 avatar rounded-circle" alt="Mannat" />
                    <div class="media-body">
                        <h6 class="mt-0 mb-0 font-size-15 font-weight-normal">
                            <a href="" class="font-weight-bold">Mannat</a> has reacted with <i
                                class='uil uil-thumbs-up text-success font-size-13'></i> on comment from <span
                                class="font-weight-bold text-primary">Shreyu</span> on project <span
                                class="font-weight-bold text-primary">Admin</span>
                        </h6>
                        <p class="text-muted">14 Min Ago</p>
                    </div>
                </div>

                <div class="media mt-3">
                    <div class="avatar mr-3 font-size-24 font-weight-normal">
                        <span class="avatar-title rounded-circle bg-soft-success text-success">D</span>
                    </div>
                    <div class="media-body">
                        <h6 class="mt-0 mb-0 font-size-15 font-weight-normal">
                            <a href="" class="font-weight-bold">Dhyani</a> has reacted with <i
                                class='uil uil-heart-sign text-danger font-size-13'></i> on comment
                            from <span class="font-weight-bold text-primary">Shreyu</span> on project <span
                                class="font-weight-bold text-primary">Admin</span>
                        </h6>
                        <p class="text-muted">14 Min Ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<script src="{{ URL::asset('assets/js/pages/widgets.init.js') }}"></script>
@endsection